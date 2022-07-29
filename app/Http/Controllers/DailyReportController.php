<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyReportModel;

class DailyReportController extends Controller
{
    //
    public function adddailyreport(request $req)
    {
        $DailyReportModel= new  DailyReportModel; 

        $DailyReportModel->id=$req->id;
        $DailyReportModel->Date=$req->Date; 
        $DailyReportModel->NoOfPresentStudents=$req->NoOfPresentStudents;
        $DailyReportModel->Feedback=$req->Feedback;
        $DailyReportModel->SchoolName=$req->SchoolName;
        
    
        $result= $DailyReportModel->save();
        
        
        //if($result){
            //return ["Result"=>"Student Data has been saved successfully"];
            
        //}
        //else
        //{
          //  return ["Result"=>"Student Registration Failed"];
        //};
        $DailyReportModel->message = "Report added Successfully";
        $DailyReportModel->status = true;
        return response($DailyReportModel, 201);
        
    }
}
