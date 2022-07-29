<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\NotificationModel;
use Illuminate\Support\Facades\DB;
class NotificationController extends Controller
{
    //
    public function view_Notification()
    {
        $notifications = Notification::orderby('created_at','desc')->get();
        return view('Notification.viewNotification',compact('notifications'));
    }

    public function Add_Notification()
    {
        return view('Notification.addNotification');
    }

    public function notification_store(Request $request){
       $status =  Notification::create($request->all());
       if($status){
            return back()->with('Success', 'Notification Added successfully');
        }else{
            return back()->with('Fail', 'An error occured, please try again');
        }
    }
    public function getNotification(){
        $notifications = Notification::orderby('created_at','desc')->get();
        return $notifications;
    }
}
