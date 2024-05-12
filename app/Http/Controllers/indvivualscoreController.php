<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\competition;
use App\Models\event;
use App\Models\individual_participant;
use App\Models\individual_score;
// use App\Models\individual_participant;
use Illuminate\Http\Request;

class indvivualscoreController extends Controller
{
    function index()
    {
        $indviduals = individual_score::all();
        $indvs_data = individual_participant::get(["indvidual_name", "individual_participant_id"]);
        $events = event::get(["event_id", "event_name"]);
        $adminpermtion = admin::where("admin_id", session()->get("loginAdminid"))->get("postaion");
        if ($adminpermtion[0]->postaion == 1) {
            return view("dashbourd.indvidualscore.indvidualscore")->with(["events" => $events, "indvs_data" => $indvs_data, "indviduals" => $indviduals, ]);
        } else {
            return view("dashbourd.indvidualscore.indvidualscore")->with(["events" => $events, "indvs_data" => $indvs_data, "indviduals" => $indviduals]);
        }

    }
    function create()
    {
        $indvs_data = individual_participant::get(["individual_participant_id", "indvidual_name"]);
       
        $events = event::get(["event_id", "event_name","competition_id"]);
        $competitions_data=competition::where("compentation_type","Indvidual ")->get(["competition_name","competition_id","compentation_type"]);

        // return $competitions_data;
        return view("dashbourd.indvidualscore.indscoreAdd")->with(["events" => $events, "indvs_data" => $indvs_data,"competations"=>$competitions_data]);

    }
    function store(Request $request)
    {
        $request->validate([
            "score_points"=>"reuired|integer",
            "event_id"=>"required|integer",
            "individual_participant_id"=>"required|integer"
        ]);
        individual_score::insert([
            "score_point" => $request->score_points,
            "event_id" => $request->event_id,
            "individual_participant_id" => $request->individual_participant_id,

            "created_at" => now()
        ]);
        return redirect()->back();


    }
    function edit($id)
    {
        $indvidual = individual_score::where("score_id", $id)->get(["individual_participant_id", "event_id","competition_id"]);

        $indvs_data = individual_participant::get(["indvidual_name", "individual_participant_id"]);
     
        $events = event::get(["event_id", "event_name"]);
        $competitions_data=competition::where("compentation_type","Indvidual ")->get(["competition_name","competition_id","compentation_type"]);
        return view("dashbourd.indvidualscore.indscoreEdit")->with(["id" => $id, "indvs_data" => $indvs_data, "events" => $events, "indvidual" => $indvidual,"competations"=>$competitions_data]);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            "score_points"=>"required|integer",
        ]);
        individual_score::where("score_id", $id)->update([
            "score_point" => $request->score_points,


        ]);

        return redirect()->back();
    }
    function delete($id)
    {

        individual_score::where("score_id", $id)->delete();
        return redirect()->back();






    }
}
