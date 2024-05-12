<?php

namespace App\Http\Controllers;

use App\Models\competition;
use App\Models\event;
use App\Models\requestait;
use App\Models\User;

use Illuminate\Http\Request;

class requestController extends Controller
{
    function display($id){
        $event=event::where("event_id",$id)->first();
        return view("forms.makerequest")->with(["id"=>$id,"event"=>$event]);
    } function res(){
            return view("resultapllu");
        }
    function apply($id,Request $request){
        $event=event::where("event_id",$id)->get("competition_id"); 
         $request->validate([
            "user_name" =>"required|string",
            "phone_number" => "required|numeric",
            "email" => "required|email|unique:request",
            "requests" =>"required|string|max:300|min:20",
            "user_age" => "required|numeric|min:18",
            "user_gender" => "required|in:female,male",
            
         ]);
         if(sizeof(User::where("email",$request->email)->get())==0){
            return back()->with("error","email must be regest in website");
        }else{
            requestait::insert([
            "user_name" => $request->user_name,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "request" =>$request->requests,
            "user_age" => $request->user_age,
            "user_gender" => $request->user_gender,
            "competition_id"=>$event[0]->competition_id,
            "event_id"=>$id

            ]);
            return redirect("/done") ;

        }
       

    }
}
