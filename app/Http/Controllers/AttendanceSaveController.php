<?php

namespace App\Http\Controllers;

use App\Models\AttendanceSaveModel;
use Illuminate\Http\Request;

class AttendanceSaveController extends Controller
{
    //
    public function saveattendance(Request $request)
    {
    
    $attendance = AttendanceSaveModel::create([

        //Personal Details
        'Date1'=>$request->Date1,
        'Date2'=>$request->Date2,
    
    ]);

    $attendance->status = true;
    $attendance->message = "Attendance added Successfully";
    return response($attendance, 201);
    }
}
