<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\compitionController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\feildController;
use App\Http\Controllers\indvidualController;
use App\Http\Controllers\indvivualscoreController;
use App\Http\Controllers\requestController;
use App\Http\Controllers\scoreController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\UserController;
use App\Models\competition;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//show home


// function login /signup logout
Route::controller(UserController::class)->group(function(){
    Route::get('/login','login'); //show login page
    Route::get("/","returnview");
    Route::get("/regester","regestform"); //show regester page
    Route::post("/adduser","regist"); //add user
    Route::get("/logout","logout")->middleware("loginverfy"); //logout
    Route::post('/logincheck','logincheck'); //login
    Route::get("/profile","profile")->middleware("loginverfy");
});

// invadual compators
Route::controller(indvidualController::class)->group(function(){
route::get("/formaddind/{id}","create")->middleware("loginverfy");
Route::post("/indviualadd/{id}","add")->middleware("loginverfy");
Route::get("/allcompator","index");

});

//teames
Route::controller(teamController::class)->group(function(){
    Route::get("teamadd/{id}","create")->middleware("loginverfy");
    Route::post("/addteam/{id}","add")->middleware("loginverfy");
});

// dashbourd 
//competation
Route::controller(compitionController::class)->group(function(){
    Route::get("/comp","index")->middleware("adminverify");
    Route::get("/showcompletedcomp","show_completed_com")->middleware("adminverify");
    Route::get("/competiondisplay","showcom");
    Route::get("/compcreate","create")->middleware("adminverify");
    Route::post("/compadd","store")->middleware("adminverify");
    Route::get("/compedit/{id}","edit")->middleware("adminverify");
    Route::post("/compupdate/{id}","update")->middleware("adminverify");
    Route::delete("/compdel/{id}","delete")->middleware("adminverify");
});
//events
Route::controller(eventController::class)->group(function(){
    Route::get("/event","index")->middleware("adminverify");
    Route::get("showevents/{id}",'showevents');
    Route::get("/eventcreate","create")->middleware("adminverify");
    Route::get("/showoneevent/{id}","showoneevent");
    Route::post("/eventadd","store")->middleware("adminverify");
    Route::get("/eventedit/{id}","edit")->middleware("adminverify");
    Route::put("/eventupdate/{id}","update")->middleware("adminverify");
    Route::delete("/eventdel/{id}","delete")->middleware("adminverify");
});
//event feilds
Route::controller(feildController::class)->group(function(){
    Route::get("/eventfield","index")->middleware("adminverify");
    Route::get("/eventfieldcreate","create")->middleware("adminverify");
    Route::post("/eventfieldadd","store")->middleware("adminverify");
    Route::get("/eventfieldedit/{id}","edit")->middleware("adminverify");
    Route::put("/eventfieldupdate/{id}","update")->middleware("adminverify");
    Route::delete("/eventfielddel/{id}","delete")->middleware("adminverify");
});
//team score
Route::controller(scoreController::class)->group(function(){
    Route::get("/teamscore","index")->middleware("adminverify");
    Route::get("/teamscorecreate","create")->middleware("adminverify");
    Route::post("/teamscoreadd","store")->middleware("adminverify");
    Route::get("/teamscoreedit/{id}","edit")->middleware("adminverify");
    Route::put("/teamscoreupdate/{id}","update")->middleware("adminverify");
    Route::delete("/teamscoredel/{id}","delete")->middleware("adminverify");
});
//ibdvidual compator score
Route::controller(indvivualscoreController::class)->group(function(){
    Route::get("/indscore","index")->middleware("adminverify");
    Route::get("/indscorecreate","create")->middleware("adminverify");
    Route::post("/indscoreadd","store")->middleware("adminverify");
    Route::get("/indscoreedit/{id}","edit")->middleware("adminverify");
    Route::put("/indscoreupdate/{id}","update")->middleware("adminverify");
    Route::delete("/indscoredel/{id}","delete")->middleware("adminverify");
});
Route::get("/show",function(){
    return view("forms.logout");
});
//admins score
Route::controller(adminController::class)->group(function(){
    Route::get("/admins","index")->middleware("adminverify");
    Route::post("/adminlogincheck","adminlogincheck");
    Route::get("/adminlogin","adminlogin");
    Route::get("/admincreate","create")->middleware("adminverify");
    Route::post("/adminadd","store")->middleware("adminverify");
    Route::get("/adminedit/{id}","edit")->middleware("adminverify");
    Route::put("/adminupdate/{id}","update")->middleware("adminverify");
    Route::delete("admindel/{id}","delete")->middleware("adminverify");
    Route::get("/basic","basic");
    Route::get("/adminlogout","logout")->middleware("adminverify");
});

Route::get("/apply/{id}",[requestController::class,"display"]);
Route::post("/makeapply/{id}",[requestController::class,"apply"]);
Route::get("/done",[requestController::class,"res"]);
Route::get("/error",function(){
    return view("error");
}); 

Route::get("/compscore/{id}",[compitionController::class,'compscore']);