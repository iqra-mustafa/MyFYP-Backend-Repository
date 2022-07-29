<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use App\Models\InstitutionModel;

use Illuminate\Http\Request;


class StatisticsController extends Controller
{
    //
    public function sendStatistics(Request $request)
    {
        
        $students = student::all();
        $users = User::all();
        $institutions = InstitutionModel::all();

        $Registered_Students=count($students);
        $Registered_Volunteers=count($users);
        $Registered_Institutions=count($institutions);

        if($Registered_Students==null && $Registered_Volunteers==null && $Registered_Institutions)
        {
        $status = false;
        $message = "Sorry! Statistics Not Available";
        
            return ['status' => $status,'message' =>$message];
        }
        else
        {
            $status = true;
            $message = "Statistics Sended Successfully";
            
                return ['status' => $status,'message' =>$message,'Registered_Students'=>$Registered_Students,'Registered_Volunteers'=>$Registered_Volunteers,'Registered_Institutions'=>$Registered_Institutions];
        }
    }
}
