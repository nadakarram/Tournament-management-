<?php

namespace App\Http\Controllers;

use App\Models\competition;
use App\Models\event;
use App\Models\team_score;
use App\Models\teames;
use App\Models\User;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class teamController extends Controller
{
    function index()
    {
        $teames = teames::get();
    }
    function create($id)
    {
        try {
            $t = competition::where("competition_id", $id)->get("competition_name");
            $num = teames::where("competition_id", $id)->get()->count();
            if ($num >= 4) {
                return response('number complete');
            } else {
                return view("forms.jointeam")->with(["competition_id" => $id, "competition_name" => $t[0]->competition_name]);
            }
        } catch (Exception $e) {
            return response("don't play in url");

        }
    }
    function add(Request $request, $competition_id)
    { 
        $request->validate([
            "team_name"=>"required|unique:teams",
            "email1" => "required|unique:teams|unique:individual_participants|email",
            "email2" => "required|unique:teams|email",
            "email3" => "required|unique:teams|email",
            "email4" => "required|unique:teams|email",
            "email5" => "required|unique:teams|email",
        ]);
        if($request->email1 != $request->email2 && $request->email1 != $request->email3 && $request->email1 != $request->email4 && $request->email1 != $request->email5 &&
        $request->email2 != $request->email3 && $request->email2 != $request->email4 && $request->email2 != $request->email5 &&
        $request->email3 != $request->email4 && $request->email3 != $request->email5 &&
        $request->email4 != $request->email5){

            if(sizeof(User::where("email",$request->email1)->get())==0||sizeof(User::where("email",$request->email2)->get())==0||sizeof(User::where("email",$request->email3)->get())==0||sizeof(User::where("email",$request->email4)->get())==0||sizeof(User::where("email",$request->email5)->get())==0){
                return back()->with("error","all emails must be regester in website");
            }
        
        }else{
            return back()->with("error","every member must have aunique email");
        }
        

             
            teames::insert([
                "team_name" => $request->team_name,
                "email1" => $request->email1,
                "email2" => $request->email2,
                "email3" => $request->email3,
                "email4" => $request->email4,
                "email5" => $request->email5,
                "competition_id" => $competition_id,
                "created_at" => now()

            ]);
            User::where("email",$request->email1)->update(["masage"=>"you are particepate in team $request->team_name by $request->email1"]);
            User::where("email",$request->email2)->update(["masage"=>"you are particepate in team $request->team_name by $request->email1"]);
            User::where("email",$request->email3)->update(["masage"=>"you are particepate in team $request->team_name by $request->email1"]);
            User::where("email",$request->email4)->update(["masage"=>"you are particepate in team $request->team_name by $request->email1"]);
            User::where("email",$request->email5)->update(["masage"=>"you are particepate in team $request->team_name by $request->email1"]);


      
        $num = teames::where("competition_id", $competition_id)->get()->count();
      
        if ($num = 4) {
            competition::where("competition_id",$competition_id)->update([
                "start_data"=>date("Y-m-d"),
                "state"=>"completed"
            ]);
            
        }
            $id = teames::where("team_name", $request->team_name)->get("team_id");
            $events = event::where("competition_id", $competition_id)->get("event_id");
            foreach ($events as $event) {

                team_score::insert([
                    "score_points" => 0,
                    "event_id" => $event->event_id,
                    "team_id" => $id[0]->team_id,
                    "competition_id"=>$competition_id,
                    "created_at" => now()

                ]);

            }
            return view("res")->with("competition_id", $competition_id);

        }


    }

