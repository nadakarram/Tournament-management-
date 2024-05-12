<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\competition;
use App\Models\event;
use App\Models\team_score;
use App\Models\teames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\IsEmpty;
use Illuminate\Support\Facades\Hash;
use Session;
class adminController extends Controller
{
    function logout(){
        if (Session::has("loginAdminid")) {
            Session::pull("loginAdminid");
            Session::pull("loginid");
            Session::pull("postion");
            return redirect("/");
        }
    }
    //display admins
    function index()
    {
        $admins=admin::where("postaion",0)->get();
           
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
                //  return session()->get("loginAdminid");
                if($admin->postaion!==1){
                    return view("error");
                    
                }else{

                return view("dashbourd.admins.admins")->with("admins",$admins);
                }
                
           
      
           

        
         
           
        

    }
    //show form for add admin
    function create()
    {
      
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            //  return session()->get("loginAdminid");
            if($admin->postaion!==1){
                return view("error");
                
            }else{

        return view("dashbourd.admins.adminAdd");
    }
           
    }
    function basic(){

        // $scores = DB::table('teames_score')->where("competition_id",9)
        // ->select('team_id', DB::raw('SUM(score_points) as total_score'))
        // ->groupBy('team_id')
        // ->orderByDesc('total_score')
        // ->get();

    // return $scores;
    //    $events= event::where("competition_id",6)->get();
    //    $teames=teames::where("team_id",$scores[])->get();
    //    $teames_score=team_score::where("team_id",)
        // foreach($events as $event){
            
        //  echo $scores=team_score::where("event_id",$event->event_id)->groupBy("team_id")->orderBy("score_points","desc")->get();
            
        // }; 

        
       
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            // return $admin;
            if($admin->postaion==1){
                session()->put("postion",1);
                return view("layout.dashbourd");
            }else{
                // return session()->get("postion");
                return view("layout.dashbourd");
            }
       
       
   
}
    //add admin
    function store(Request $request)
    {
        
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            //  return session()->get("loginAdminid");
            if($admin->postaion!==1){
                return redirect("error");
                
            }else{
            $request->validate([
               "admin_name"=>"required|string",
               "admin_phone"=>"required|string",
               "admin_email"=>"required|email|unique:admins",
               "admin_password"=>"required|max:20|min:8"
            ]); 
            admin::insert([
            "admin_name" => $request->admin_name,
            "admin_phone" => $request->admin_phone,
            "admin_email" => $request->admin_email,
            "password" => $request->admin_password,
            "created_at" => now()
           ]);
        return redirect("/admins");
        }
       


    }
    //show form for updata any admin data
    function edit($id)
    {
        
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            if($admin->postaion!==1){
                return redirect("error");
                
            }else{
        return view("dashbourd.admins.adminEdit")->with("id", $id);
            }
       
    }
    //upadate admin data
    function update(Request $request, $id)
    {
        
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            if($admin->postaion!==1){
                return redirect("error");
                
            }else{
            $request->validate([
               "admin_name"=>"required|string",
               "admin_phone"=>"required|integer",
               "admin_email"=>"required|email|unique:admins",
               "admin_password"=>"required|max:20|min:8"
            ]);
        admin::where("admin_id", $id)->update([
            "admin_name" => $request->admin_name,
            "admin_email" => $request->admin_email,
            "admin_phone" => $request->admin_phone,
            "admin_password" => $request->admin_password,

        ]);

        return redirect("/admins");
    }
    }
    //delete admin
    function delete($id)
    {
      
            $admin=admin::where("admin_id",session()->get("loginAdminid"))->first();
            if($admin->postaion!==1){
                return redirect("error");
                
            }else{
        admin::where("admin_id", $id)->delete();
        return redirect("/admins");}






    }
    function adminlogin(){
        return view("forms.admin_login");
    }
    //admin login
    function adminlogincheck(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $admin = admin::where("admin_email", $request->email)->first();
       
        if ($admin) {
            if ($request->password=== $admin->password) {
                $request->session()->put(["loginAdminid"=>$admin->admin_id,"loginid"=> $admin->admin_id]);
                return  redirect("/basic");

            } else {
                return back()->with("password_faild", "invaild password");
            }

        } else {
            return back()->with("email_faild", "invaild email");

        }



    }
        
        
     


    
}
