<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controller for Registration
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\DailyReportController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\usercontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('test',function(){
    return "Test Completed";
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
// });

//New Routes

//Register Users(Admin Volunteers)
Route::post("register",[AuthController::class, 'register']);

//Login users
Route::post("login",[AuthController::class, 'logins']);

//Login users by id
//Route::get("login/{id}/show",[AuthController::class, 'shows']);

//Register Students
Route::post("registerstudent",[StudentApiController::class, 'registerstudent']);

//Add Daily Reports
Route::post("adddailyreport",[DailyReportController::class, 'adddailyreport']);

//send statistics
Route::get("sendStatistics",[StatisticsController::class, 'sendStatistics']);

//Attendance k lye schoolname bhjna
//Route::get("sendattendance",[AttendanceController::class, 'sendattendance']);

//Attendance ko save kren
//Route::post("saveattendance",[AttendanceSaveController::class, 'saveattendance']);

//Deletion api
Route::delete("delete/{id}",[AuthController::class, 'delete']);
Route::get('getSchools',[SchoolController::class,'getSchools']);
Route::get('users',[usercontroller::class,'getUsers']);
Route::get('volunteers',[usercontroller::class,'getVolunteers']);
Route::get('getTeams',[usercontroller::class,'getTeams']);
Route::post('dailyReport',[usercontroller::class,'dailyReport']);
Route::get('getGalleryImages',[usercontroller::class,'getGalleryImages']);
Route::any("addcomplain",[usercontroller::class,'addComplaints']);
Route::get('getTeams',[usercontroller::class,'getTeamsbyId']);
Route::post('emergencyrequest',[usercontroller::class,'emergencyrequest']);
Route::get('emergencyrequestbyId/{id}',[usercontroller::class,'emergencyrequestbyId']);
Route::get('isprincipal/{id}',[usercontroller::class,'isprincipal']);
Route::post('addScehdule',[usercontroller::class,'addScehdule']);
Route::get('getScehdule/{id}',[usercontroller::class,'getScehdule']);
Route::post('requestStationary',[SchoolController::class,'requestStationary']);
Route::get('Stationaryrequest/{id}',[SchoolController::class,'Stationaryrequest']);
Route::get('getNotification',[NotificationController::class,'getNotification']);
Route::post('create_attendance',[AttendanceController::class,'create_attendance']);
Route::get('allattendance/{id}',[AttendanceController::class,'allattendance']);
Route::get("getAllStudents/{id}",[StudentController::class,'getAllStudents']);
Route::post('markattendance',[AttendanceController::class,'markattendance']);
Route::get('getallmarkattendance/{id}',[AttendanceController::class,'getallmarkattendance']);