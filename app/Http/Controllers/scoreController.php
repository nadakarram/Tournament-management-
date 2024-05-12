<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\competition;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\team_score;
use App\Models\teames;

class scoreController extends Controller
{
    function index()
    {
        $teamscores = team_score::all();
        $teams_data = teames::get(["team_name", "team_id"]);
        $events = event::get(["event_id", "event_name"]);
        $competitions_data=competition::get(["competition_name","competition_id"]);
        $adminpermtion = admin::where("admin_id",session()->get("loginAdminid"))->get("postaion");
        if ($adminpermtion[0]->postaion == 1) {
            return view("dashbourd.teamscore.teamscore")->with(["events" => $events, "teams_data" => $teams_data, "teamscores" => $teamscores,"competation"=>$competitions_data]);
        } else {
            return view("dashbourd.teamscore.teamscore")->with(["events" => $events, "teams_data" => $teams_data, "teamscores" => $teamscores,"competation"=>$competitions_data]);
        }

    }
    function create()
    {
        $teams_data = teames::get(["team_name", "team_id"]);
        $events = event::get(["event_id", "event_name","competition_id"]);
        $competitions_data=competition::where("compentation_type","Team")->get(["competition_name","competition_id","compentation_type"]);
        // return $competitions_data;
        return view("dashbourd.teamscore.teamscoreAdd")->with(["events" => $events, "teams_data" => $teams_data,"competation"=>$competitions_data]);

    }
    function store(Request $request)
    {
        team_score::insert([
            "score_points" => $request->score_points,
            "event_id" => $request->event_id,
            "team_id" => $request->team_id,
            "competition_id"=>$request->competition_id,

            "created_at" => now()
        ]);
        return redirect()->back();


    }
    function edit($id)
    {
        $teamscore = team_score::where("score_id", $id)->get(["team_id", "event_id","competition_id"]);
        $competitions_data=competition::get(["competition_name","competition_id"]);
        $teams_data = teames::get(["team_name", "team_id"]);
        $events = event::get(["event_id", "event_name"]);

        return view("dashbourd.teamscore.teamscoreEdit")->with(["id" => $id, "teams_data" => $teams_data, "events" => $events, "teamscore" => $teamscore,"competation"=>$competitions_data]);
    }
    function update(Request $request, $id)
    {
        $request->validate(["score_points"=>"required"]);
        team_score::where("score_id", $id)->update([
            "score_points" => $request->score_points,


        ]);

        return redirect("/teamscore");
    }
    function delete($id)
    {

        team_score::where("score_id", $id)->delete();
        return redirect()->back();






    }
}
