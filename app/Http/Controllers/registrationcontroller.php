<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\registration;

class registrationcontroller extends Controller
{
    //
    function add(Request $req)
    {

        $registration=new registration;

        $registration->Full_Name=$req->Full_Name;
        $registration->Email=$req->Email;
        $registration->Contact_Number=$req->Contact_Number;
        $registration->CNIC=$req->CNIC;
        $registration->Present_Address=$req->Present_Address;
        $registration->University=$req->University;
        $registration->Semester=$req->Semester;
        $registration->Password=$req->Password;

        $result= $registration->save();
        if($result)
        {
            return["Result"=>"Data has been saved"];
        }
        else
            return["Result"=>"Operation Failed"];
    }
}
