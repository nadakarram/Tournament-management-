<?php

namespace App\Http\Controllers;

use App\Models\competition;
use App\Models\event;
use App\Models\individual_participant;
use App\Models\individual_score;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class indvidualController extends Controller
{
    function index()
    {
        $individual_participant = individual_participant::get();
    }
    function create($id)
    {
        try {
            $t = competition::where("competition_id", $id)->get("competition_name");
            $num = individual_participant::get()->count();
            if ($num >= 20) {
                return response("number in this competation complete");

            } else {
                return view("forms.joincompator")->with(["competition_id" => $id, "competition_name" => $t[0]->competition_name]);
            }
        } catch (Exception $e) {
            return response("don't play in url");

        }
    }
    function add(Request $request, $competition_id)
    {
        $num = individual_participant::get()->count();
        if ($num >= 20) {
            return response("number in this competation complete");

        } else {
            $request->validate([
                "indvidual_name"=>"required|string",
                "email1"=>'required|unique:individual_participants|email',

            ]);
            if(sizeof(User::where("email",$request->email1)->get())==0){
                return back()->with("error","email must be regest in website");
            }else{
              
                 individual_participant::insert([
                "indvidual_name" => $request->indvidual_name,
                "email1" => $request->email1,
                "competition_id" => $competition_id,
                "created_at" => now()

            ]);
            }
           
            $id = individual_participant::where("email1", $request->email1)->get("individual_participant_id");

            $events = event::where("competition_id", $competition_id)->get("event_id");


            foreach ($events as $event) {

                individual_score::insert([
                    "score_point" => 0,
                    "event_id" => $event->event_id,
                    "individual_participant_id" => $id[0]->individual_participant_id,
                    "competition_id" => $competition_id,
                    "created_at" => now()
                ]);

            }


            return view("res")->with("competition_id", $competition_id);
        }



    }
}
