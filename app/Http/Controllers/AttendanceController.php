<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;
use App\Models\ClassAttendance;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function create_attendance(Request $request){
      $status =  AttendanceModel::create($request->all());
      if($status){
           return $status;
       }else{
           return null;
       }
    }
    public function allattendance($id){
      return AttendanceModel::where('user_id',$id)->orderby('created_at','desc')->get();
    }
    public function markattendance(Request $request){
        $status = ClassAttendance::create($request->all());
        if($status){
            return ["status" => true,"message" => "Attendance Marked successfully"];
        }else{
            return ["status" => false,"message" => "Report submission failed"];
        } 
    }
    public function getallmarkattendance($id){
      return AttendanceModel::where('id',$id)->orderby('created_at','desc')->get();
    }
    public function view_attendace_student($id){
      $studentattendances =  ClassAttendance::where('attendance_id',$id)->orderby('created_at','desc')->get();
     // return $studentattendances;
      return view('Attendance.studentattendance',compact('studentattendances'));
    }
}
