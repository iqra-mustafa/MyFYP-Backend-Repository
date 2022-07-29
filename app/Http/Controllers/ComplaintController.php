<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Models\Complaint;
use App\Models\EmergencyRequests;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
   public function pending_emergency_requests(){
        $requests = EmergencyRequests::where('status',0)->orderby('created_at','desc')->get();
        return view('emergency.requests',compact('requests'));
   }
   public function resolved_emergency_requests(){
        $requests = EmergencyRequests::where('status',1)->orderby('created_at','desc')->get();
        return view('emergency.requests',compact('requests'));
   }
   public function update_request_status($id){
     EmergencyRequests::where('id',$id)->update(["status" => 1]);
     
   }
}
