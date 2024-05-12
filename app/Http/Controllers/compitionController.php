<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\competition;
use App\Models\individual_participant;
use App\Models\teames;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Expectation;

class compitionController extends Controller
{
    //show comp for admin
    function index()
    {
        $competitions = competition::all();
        $adminpermtion = admin::where("admin_id", session()->get("loginAdminid"))->get("postaion");
        if ($adminpermtion[0]->postaion == 1) {
            return view("dashbourd.competions.competation")->with(["competitions" => $competitions]);
        } else {
            return view("dashbourd.competions.competation")->with(["competitions" => $competitions]);

        }

    }
    //show comp for users
    function showcom()
    {
        $competitions = competition::all();
        return view("competion")->with('competitions', $competitions);
    }
    //show completed comp "admin"
    function show_completed_com()
    {
        $competitions = competition::where("state", "completed")->get();
        return view("dashbourd.competions.completedcom")->with("competations", $competitions);
    }
    //show form for create comp "admin"
    function create()
    {
        return view("dashbourd.competions.competationAdd");

    }
    //store comp data for admin
    function store(Request $request)
    {
        $request->validate([
            "competition_name" => "required|string",
            "competition_desc" => "required|max:5500|min:500",
            "competition_photo" => "required|url",
            "compentation_type" => "required|in:Indvidual,Team",
            "start_data" => "required|date"
        ]);
        competition::insert([
            "competition_name" => $request->competition_name,
            "competition_desc" => $request->competition_desc,
            "competition_photo" => $request->competition_photo,
            "compentation_type" => $request->compentation_type,
            "start_data" => $request->start_data
        ]);
        return redirect()->back();


    }
    //show form for updata "admin"
    function edit($id)
    {
        return view("dashbourd.competions.competationEdit")->with("id", $id);
    }
    //update comp data for admin
    function update(Request $request, $id)
    {
        $request->validate([
            "competition_name" => "required|string",
            "competition_desc" => "required|max:5500|min:500",
            "competition_photo" => "required|url",
            "compentation_type" => "required|in:Indvidual,Team",
            "start_data" => "required|date"
        ]);
        competition::where("competition_id", $id)->update([
            "competition_name" => $request->competition_name,
            "competition_desc" => $request->competition_desc,
            "competition_photo" => $request->competition_photo,
            "compentation_type" => $request->compentation_type,
            "start_data" => $request->start_data
        ]);

        return redirect()->intended(url()->previous(4));
        
    }
    // delete comp for admins
    function delete($id)
    {

        competition::where("competition_id", $id)->delete();
        return redirect()->back();






    }
    //get competation score
    function compscore($id)
    {
        $competation=competition::where("competition_id",$id)->first("compentation_type");
        if($competation->compentation_type=="Team"){
            $scores = DB::table('teames_score')->where("competition_id",$id)
                    ->select('team_id', DB::raw('SUM(score_points) as total_score'))
                    ->groupBy('team_id')
                    ->orderByDesc('total_score')
                    ->get();
                    $teams=teames::get(["team_id","team_name"]);
                    return view("scorecomp")->with(["teames_score"=>$scores,"teames"=>$teams,"competation"=>$competation]);
        }else{
            $scores = DB::table('individuals_score')->where("competition_id",$id)
            ->select('individual_participant_id', DB::raw('SUM(score_point) as total_score'))
            ->groupBy('individual_participant_id')
            ->orderByDesc('total_score')
            ->get();
            $indviduals=individual_participant::get(["individual_participant_id","indvidual_name"]);
            return view("scorecomp")->with(["indvs_score"=>$scores,"indvs"=>$indviduals,"competation"=>$competation]);
            
        }
       

    }

}
