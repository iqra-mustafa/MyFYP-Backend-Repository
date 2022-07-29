<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentApiController extends Controller
{
    //
    public function registerstudent(request $req)
    {
        $student= new student; 
        $student->id=$req->id;
        $student->S_Name=$req->S_Name;
        
        $student->S_Gender=$req->S_Gender;
        $student->S_DOB=$req->S_DOB;
        $student->S_Section=$req->S_Section;
        $student->S_Religion=$req->S_Religion;
        $student->S_Nationality=$req->S_Nationality;
        $student->S_SchoolName=$req->S_SchoolName;
        $student->S_PermanentAddress=$req->S_PermanentAddress;
        $student->S_ContactNumber=$req->S_Name;
        $student->S_FatherName=$req->S_FatherName;
        $student->S_FatherCNIC=$req->S_FatherCNIC;
        $student->S_FatherOccupation=$req->S_FatherOccupation;
        $student->S_MonthlyIncome=$req->S_MonthlyIncome;

        $result= $student->save();
        
        
        //if($result){
            //return ["Result"=>"Student Data has been saved successfully"];
            
        //}
        //else
        //{
          //  return ["Result"=>"Student Registration Failed"];
        //};
        $student->message = "User Registered Successfully";
        $student->status = true;
        return response($student, 201);
        
    }
}
