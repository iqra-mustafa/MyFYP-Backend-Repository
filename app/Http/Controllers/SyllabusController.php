<?php

namespace App\Http\Controllers;
use App\Models\syllabus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    //
    public function view_Syllabus()
    {
    $s= syllabus::all();
        return view('Syllabus.ViewSyllabus',['syllabuses'=>$s]);
    }

    public function create()
    {
        $data = DB::table('syllabuses')->get();
        return view('Syllabus.addNewSyllabus',compact('syllabuses'));
    }
}
