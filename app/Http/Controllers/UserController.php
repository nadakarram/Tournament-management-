<?php

namespace App\Http\Controllers;

use App\Models\competition;
use App\Models\individual_participant;
use App\Models\teames;
use App\Models\User;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    function returnview()
    {
        return view("index");
    }
    //show form regester
    function regestform()
    {
        return view("forms.regester");
    }
    //add user
    function regist(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "phone_number" => "required|string|size:11",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string",
            "age" => "required|integer|min:18|max:120",
            "gender" => "required|string|in:female,male"


        ]);
        DB::table("users")->insert(
            [
                "user_name" => $request->name,
                "user_phone_number" => $request->phone_number,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "user_age" => $request->age,
                "user_gender" => $request->gender,
                "created_at" => now()
            ]
        );
        return redirect("/")->with("send", "sign up success");

    }
    // function login(Request $request)
    // {
    //     $alldata = User::where("user_email", $request->email)->get();
    //     if ($alldata) {
    //         if ($alldata[0]->user_password === $request->password) {
    //             User::where("user_email", $request->email)->update(["state"=>1]);
    //             return view("index")->with("id",$alldata[0]->user_id);
    //         } else {
    //             return redirect("/auth")->with("pass", "password is't correct");
    //         }

    //     } else {
    //         return redirect("/auth")->with("email", "email not found");
    //     }

    // }
    //logout 
    function logout(Request $request)
    {

        // Auth::logout();

        // $request->session()->invalidate();
        // $request->session()->regenerate();
        // return redirect("/");


        if (Session::has("loginid")) {
            Session::pull("loginid");
            return redirect("/");
        }


    }
    //show login page
    function login()
    {
        return view('forms.login');
    }
    function logincheck(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = User::where("email", $request->email)->first();

        if ($user) {
            if (hash::check($request->password, $user->password)) {
                $request->session()->put("loginid", $user->user_id);
                return redirect("/");

            } else {
                return back()->with("password_faild", "invaild password");
            }

        } else {
            return back()->with("email_faild", "invaild email");

        }

    }
    function profile()
    {
        $user = User::where("user_id", Session::get("loginid"))->first();

        $getid = individual_participant::where("email1", $user->email)->get("competition_id");
      
        if (sizeof($getid) != 0) {


            $com = competition::where("competition_id", $getid[0]->competition_id)->get();
            $events = event::where("competition_id", $com[0]->competition_id)->get();
            return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);
        } else {
           
            
            $getteam_m_1 = teames::where("email1", $user->email)->get("competition_id");
           
            $getteam_m_2 = teames::where("email2",$user->email)->get("competition_id");
            $getteam_m_3 = teames::where("email3", $user->email)->get("competition_id");
            $getteam_m_4 = teames::where("email4",$user->email)->get("competition_id");
            $getteam_m_5 = teames::where("email5",$user->email)->get("competition_id");
            if (sizeof($getteam_m_1)!==0) {

                $com = competition::where("competition_id", $getteam_m_1[0]->competition_id)->get();
                //  return $com;
                 $events = event::where("competition_id", $com[0]->competition_id)->get();
                return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);
            } elseif (sizeof($getteam_m_2)!==0) {
                $com = competition::where("competition_id", $getteam_m_2[0]->competition_id)->get();
                $events = event::where("competition_id", $com[0]->competition_id)->get();
                return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);


            } elseif (sizeof($getteam_m_3)!==0) {
                $com = competition::where("competition_id", $getteam_m_3[0]->competition_id)->get();
                $events = event::where("competition_id", $com[0]->competition_id)->get();
                return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);
            } elseif (sizeof($getteam_m_4)!==0) {
                $com = competition::where("competition_id", $getteam_m_4[0]->competition_id)->get();
                $events = event::where("competition_id", $com[0]->competition_id)->get();
                return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);
            } elseif(sizeof($getteam_m_5)!==0) {
                $com = competition::where("competition_id", $getteam_m_5[0]->competition_id)->get();
                $events = event::where("competition_id", $com[0]->competition_id)->get();
                return view("profile")->with(["competation" => $com, "events" => $events,"user"=>$user]);
            }else{
                return view("profile")->with(["user"=>$user]);
            }


        }

      
    }
}
