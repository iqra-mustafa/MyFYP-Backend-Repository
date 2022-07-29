<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{

    
    public function view_student(){

       //return student::all();
        $std= student::all();
        return view('Student.viewstudent',['students'=>$std]);
        //return view('Student.viewstudent',compact('std'));
    }
    public function getAllStudents($id){
        return student::where('S_SchoolName',$id)->orderby('S_Name','asc')->get();
    }
}
