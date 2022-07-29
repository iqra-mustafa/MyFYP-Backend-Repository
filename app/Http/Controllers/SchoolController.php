<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Mail\StationaryEmail;
use App\Models\AttendanceModel;
use App\Models\Complaint;
use App\Models\DailyReport;
use App\Models\School;
use App\Models\SchoolSchedule;
use App\Models\StationaryRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SchoolController extends Controller
{
    public function index(){
        return view('schools.create');
    }
    public function store_school(Request $request){
        $filename = FileHelper::save($request->image,'/schoolimages');
        $status = School::create([
            "name" => $request->name,
            "location" => $request->location,
            "timing" => $request->timing,
            "image" => $filename
        ]);
        if($status){
            return back()->with('Success', 'School added successfully');
        }else{
            return back()->with('Fail', 'An error occured, please try again');
        }
    }
    public function view_school(){
        $schools = School::orderby('created_at','desc')->get();
        return view('schools.index',compact('schools'));
    }
    public function delete_school(School $school){
        $school->delete();
        return back()->with('Fail', 'School Deleted Successfully');
    }
    public function getSchools(){
        $school = School::orderby('created_at','desc')->get();
        return $school;
    }
    public function view_daily_report($id){
        $reports = DailyReport::where('SchoolName',$id)->orderby('created_at','desc')->get();
        return view('schools.reports',compact('reports'));
    }

    public function view_complaints(){
        $complaints = Complaint::orderby('created_at','desc')->get();
        return view('Complaints.index',compact('complaints'));
    }
    public function assign_principal(School $school){
        $users = User::where('V_InstituteName',$school->id)->get();
        $currentuser = User::where('V_InstituteName',$school->id)
                        ->where('is_principal',1)->first();
        return view('schools.assignprincipal',compact('school','users','currentuser'));
    }
    public function change_principal(Request $request){
        $status = User::where('id',$request->user_id)
              ->where('V_InstituteName',$request->school_id)
              ->update([
                        "is_principal" => 1
                    ]);
        if($status){
            return redirect()->route('view_school')->with('Success', 'Principal Assigned successfully');
        }else{
            return redirect()->route('view_school')->with('Fail', 'An error occured, please try again');
        }
    }
    public function view_schedule($id){
        $schedules = SchoolSchedule::where('school_id',$id)
                    ->orderby('created_at','desc')->get();
        return view('schools.viewschedule',compact('schedules'));
    }

    public function requestStationary(Request $request){
           $status =  StationaryRequest::create($request->all());
           if($status){
                return ['status' => true,"message" => 'Request submitted successfully'];
            }else{
                return ['status' => false, "message" => 'An error occured, please try again'];
            }
    }
    public function Stationaryrequest($id){
        return StationaryRequest::where('school_id',$id)->get();
    }

    public function view_stationary_request(){
        $stationaries = StationaryRequest::where('status',0)->orderby('created_at','desc')->get();
        return view('Stationary.requests',compact('stationaries'));
    }
    public function approved_stationary_request(){
        $stationaries = StationaryRequest::where('status',1)->orderby('created_at','desc')->get();
        return view('Stationary.requests',compact('stationaries'));
    }
    public function approve_stationary(StationaryRequest $stationary){
            $user = User::where('V_TeamName','Finance')->first();
            Mail::to($user->email)
                    ->send(new StationaryEmail($stationary));
            $status = StationaryRequest::where('id',$stationary->id)->update(["status" => 1]);
            if($status){
                return back()->with('Success', 'Status Changed successfully');
            }else{
                return back()->with('Fail', 'An error occured, please try again');
            }

    }

    public function view_attendance($id){
        $attendances = AttendanceModel::where('school_id',$id)->orderby('created_at','desc')->get();
        return view('Attendance.viewattendance',compact('attendances'));
    }


}
