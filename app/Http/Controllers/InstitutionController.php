<?php

namespace App\Http\Controllers;
use App\Models\InstitutionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstitutionController extends Controller
{
    //
    public function view_institution()
    {
    $institution = InstitutionModel::all();
        return view('Institute.addInstitute',['institutions'=>$institution]);
    }
    //
    public function create()
    {
        $newinstituion = DB::table('institutions')->get();

        return view('Institute.addNewInstitute',compact('newinstituion'));
    }
}
