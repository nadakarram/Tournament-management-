<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\competition;
use App\Models\event;
use App\Models\eventFeild;
use App\Models\individual_participant;
use App\Models\individual_score;
use App\Models\team_score;
use App\Models\teames;
use Illuminate\Http\Request;

class eventController extends Controller
{
    function index(){
        $events = event::all();
        $competitions_data = competition::get(["competition_name", "competition_id"]);
        $eventfeilds_data = eventFeild::get(["eventfeild_id", "eventfeild_name"]);
  $i=0;
        foreach ($events as $event) {
            $competation = event::where("event_id", $event->event_id)->first();
            $competation_id = $competation->competition_id;
            $TEAMorIND = competition::where("competition_id", $competation_id)->first("compentation_type");
            $type = $TEAMorIND->compentation_type;
            if ($type == 'Team') {
                // $teames_score = team_score::where("event_id", $event->event_id)->get(["team_id", "score_points"]);
                
                // if ($teames_score[0]->score_points !== 0 && $teames_score[1]->score_points !== 0 && $teames_score[2]->score_points !== 0 && $teames_score[3]->score_points !== 0) {
                //     event::where("event_id", $event->event_id)->update([
                //         "state" => "finshed"
                //     ]);
                // }elseif($teames_score[0]->score_points == 0 && $teames_score[1]->score_points == 0 && $teames_score[2]->score_points == 0 && $teames_score[3]->score_points == 0){
                //     event::where("event_id", $event->event_id)->update([
                //         "state" => "doesn't start"
                //     ]);

                // }else{
                //      event::where("event_id", $event->event_id)->update([
                //         "state" => "started"
                //     ]);
                // }
              
               
               
            }else{
            //    $indv_score=individual_score::where("event_id", $event->event_id)->get(["individual_participant_id","score_point"]);
            //    if (
            //         $indv_score[0]->score_point !== 0 &&
            //         $indv_score[1]->score_point !== 0 &&
            //         $indv_score[2]->score_point !== 0 &&
            //         $indv_score[3]->score_point !== 0 &&
            //         $indv_score[4]->score_point !== 0 &&
            //         $indv_score[5]->score_point !== 0 &&
            //         $indv_score[6]->score_point !== 0 &&
            //         $indv_score[7]->score_point !== 0 &&
            //         $indv_score[8]->score_point !== 0 &&
            //         $indv_score[9]->score_point !== 0 &&
            //         $indv_score[10]->score_point !== 0 &&
            //         $indv_score[11]->score_point !== 0 &&
            //         $indv_score[12]->score_point !== 0 &&
            //         $indv_score[13]->score_point !== 0 &&
            //         $indv_score[14]->score_point !== 0 &&
            //         $indv_score[15]->score_point !== 0 &&
            //         $indv_score[16]->score_point !== 0 &&
            //         $indv_score[17]->score_point !== 0 &&
            //         $indv_score[18]->score_point !== 0 &&
            //         $indv_score[19]->score_point !== 0 
               
            // ){
            //     event::where("event_id", $event->event_id)->update([
            //         "state" => "finshed"
            //     ]);
            // }elseif(
            //     $indv_score[0]->score_point == 0 &&
            //     $indv_score[1]->score_point == 0 &&
            //     $indv_score[2]->score_point == 0 &&
            //     $indv_score[3]->score_point == 0 &&
            //     $indv_score[4]->score_point == 0 &&
            //     $indv_score[5]->score_point == 0 &&
            //     $indv_score[6]->score_point == 0 &&
            //     $indv_score[7]->score_point == 0 &&
            //     $indv_score[8]->score_point == 0 &&
            //     $indv_score[9]->score_point == 0 &&
            //     $indv_score[10]->score_point == 0 &&
            //     $indv_score[11]->score_point == 0 &&
            //     $indv_score[12]->score_point == 0 &&
            //     $indv_score[13]->score_point == 0 &&
            //     $indv_score[14]->score_point == 0 &&
            //     $indv_score[15]->score_point == 0 &&
            //     $indv_score[16]->score_point == 0 &&
            //     $indv_score[17]->score_point == 0 &&
            //     $indv_score[18]->score_point == 0 &&
            //     $indv_score[19]->score_point == 0 



            // ){
            //     event::where("event_id", $event->event_id)->update([
            //         "state" => "doesn't start"
            //     ]);

            // }else{
            //     event::where("event_id", $event->event_id)->update([
            //         "state" => "started"
            //     ]);
            // }

            // }
          
        }
    }

 return view("dashbourd.events.event")->with(["events" => $events, "competitions_data" => $competitions_data, "eventfeilds_data" => $eventfeilds_data]);

    }
    function create()
    {
        $competitions_data = competition::get(["competition_name", "competition_id"]);
        $eventfeilds_data = eventFeild::get(["eventfeild_id", "eventfeild_name"]);
        // return $competitions_data;
        return view("dashbourd.events.eventAdd")->with(["competitions_data" => $competitions_data, "eventfeilds_data" => $eventfeilds_data]);

    }
    function store(Request $request)
    {
        event::insert([
            "event_name" => $request->event_name,
            "event_photo" => $request->event_photo,
            "event_desc" => $request->event_desc,
            "event_time" => $request->event_time,
            "state" => "doesn't start",
            "competition_id" => $request->competition_id,
            "eventfeild_id" => $request->eventfeild_id,
            "created_at" => now()
        ]);
        return redirect()->back();


    }
    function edit($id)
    {

        return view("dashbourd.events.eventEdit")->with("id", $id);
    }
    function update(Request $request, $id)
    {

        event::where("event_id", $id)->update([
            "event_name" => $request->event_name,
            "event_photo" => $request->event_photo,
            "event_desc" => $request->event_desc,
            "event_time" => $request->event_time,
            "state" => $request->state

        ]);

        return redirect()->back();
    }
    function delete($id)
    {

        event::where("event_id", $id)->delete();
        return redirect()->back();






    }
    function showevents($competition_id)
    {
        $all = eventFeild::get();
        $events = event::where('competition_id', $competition_id)->get();

        return view("competationsevent")->with(["events" => $events, "all" => $all]);


    }
    function showoneevent($id)
    {
        $event = event::where("event_id", $id)->get();
        $all = eventFeild::get();
        $competation = event::where("event_id", $id)->first();
        $competation_id = $competation->competition_id;
        $TEAMorIND = competition::where("competition_id", $competation_id)->first("compentation_type");
        $type = $TEAMorIND->compentation_type;
        if ($type == 'Team') {
            $teames = teames::get(["team_name", "team_id"]);
            $teames_score = team_score::where("event_id", $id)->orderByDesc("score_points")->get(["team_id", "score_points"]);
            if(sizeof($teames_score)==0){
                return "there is no participation yet ";
               }
            return view("oneevent")->with(["type"=>$type,"event" => $event, 'all' => $all, "teames" => $teames, "teames_score" => $teames_score]);
        } else {
            $indv=individual_participant::get(["indvidual_name","individual_participant_id"]);
            $indvs_score = individual_score::where("event_id", $id)->orderByDesc("score_point")->get(["individual_participant_id", "score_point"]);
           if(sizeof($indvs_score)==0){
            return "there is no participation yet ";
           }
            return view("oneevent")->with(["event" => $event, 'all' => $all, "indvs" => $indv, "indvs_score" => $indvs_score,"type"=>$type]);

        }

        //     $events= event::where("competition_id",6)->get();
        // //    $teames=teames::where("team_id",$scores[])->get();


        // return $event;

    }
}
