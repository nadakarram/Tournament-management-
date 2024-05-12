<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\eventFeild;
use Illuminate\Http\Request;

class feildController extends Controller
{
    function index()
    {
        $eventfeilds = eventFeild::all();
        $adminpermtion = admin::where("admin_id", session()->get("loginAdminid"))->get("postaion");
        if ($adminpermtion[0]->postaion == 1) {
            return view("dashbourd.eventfield.eventfield")->with(["eventfeilds" => $eventfeilds ]);
        } else {
            return view("dashbourd.eventfield.eventfield")->with(["eventfeilds" => $eventfeilds]);
        }


    }
    function create()
    {

        return view("dashbourd.eventfield.eventfeildAdd");

    }
    function store(Request $request)
    {
        $request->validate([
            "eventfeild_name"=>"required|string"
        ]);
        eventFeild::insert([
            "eventfeild_name" => $request->eventfeild_name,


            "created_at" => now()
        ]);
        return redirect()->back();


    }
    function edit($id)
    {

        return view("dashbourd.eventfield.eventfeildEdit")->with("id", $id);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            "eventfeild_name"=>"required|string"
        ]);
        eventFeild::where("eventfeild_id", $id)->update([
            "eventfeild_name" => $request->eventfeild_name,


        ]);

        return redirect()->back();
    }
    function delete($id)
    {

        eventFeild::where("eventfeild_id", $id)->delete();
        return redirect()->back();






    }
}
