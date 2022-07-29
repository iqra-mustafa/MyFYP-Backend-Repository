<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Models\Complaint;
use App\Models\DailyReport;
use App\Models\EmergencyRequests;
use App\Models\SchoolSchedule;
use App\Models\student;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    //
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

             return response($response, 201);
    }

    public function getUsers(Request $request){
        $students = student::where('S_SchoolName',$request->school_id)->get();
        return $students;
    }
    public function getVolunteers(Request $request){
        $users = User::where('V_InstituteName',$request->school_id)->get();
        return $users;
    }

    public function getTeams(Request $request){
        $users = User::where('V_TeamName',$request->team_name)->get();
        return $users;
    }
    public function getTeamsbyId(Request $request){
        $users = User::where('V_TeamName',$request->team_name)
                ->where('V_InstituteName',$request->school_id)->get();
        return $users;
    }

    public function dailyReport(Request $request){
        $report = DailyReport::where('SchoolName',$request->school_id)->orderby('created_at','desc')->first();
        if($report != null){
            $date = Carbon::parse($report->created_at);
            $now = Carbon::now();
            $diff = $date->diffInHours($now);
            if($diff < 20){
                return ["status" => true,"message" => "Today report is already submitted"];
            }else{
                $filename = FileHelper::save($request->image,'/gallery');
                $status =  DailyReport::create([
                    "NoOfPresentStudents" => $request->NoOfPresentStudents,
                    "image" => $filename,
                    "Feedback" =>$request->Feedback,
                    "SchoolName" => $request->school_id

                ]);
                if($status){
                    return ["status" => true,"message" => "Report submitted successfully"];
                }else{
                    return ["status" => false,"message" => "Report submission failed"];
                } 
            }
        }else{
            $filename = FileHelper::save($request->image,'/gallery');
            $status =  DailyReport::create([
                "NoOfPresentStudents" => $request->NoOfPresentStudents,
                "image" => $filename,
                "Feedback" =>$request->Feedback,
                "SchoolName" => $request->school_id

            ]);
            if($status){
                return ["status" => true,"message" => "Report submitted successfully"];
            }else{
                return ["status" => false,"message" => "Report submission failed"];
            }
        }
       
    }
    public function getGalleryImages(){
        $images = DailyReport::all();
        return $images;
    }

    public function addComplaints(Request $request){
       
        $filename = FileHelper::save($request->image,'/complaints');
        $status = Complaint::create([
            "title" => $request->title,
            "description" => $request->description,
            "image" => $filename,
            "user_id" => $request->user_id,
            "school_id" => $request->school_id
        ]);
        if($status){
            return ['status' => true,"message" => 'Complaint submitted successfully'];
        }else{
            return ['status' => false, "message" => 'An error occured, please try again'];
        }
    }

    public function emergencyrequest(Request $request){
        $status = EmergencyRequests::create([
            "title" => $request->title,
            "description" => $request->description,
            "user_id" => $request->user_id,
            "request_type" => $request->request_type
        ]);
        if($status){
            return ['status' => true,"message" => 'Request submitted successfully'];
        }else{
            return ['status' => false, "message" => 'An error occured, please try again'];
        }
    }
    public function emergencyrequestbyId($id){
        return EmergencyRequests::where('user_id',$id)->get();
    }
    public function isprincipal($id){
        return User::where('id',$id)->first();
    }
    public function addScehdule(Request $request){
        $status = SchoolSchedule::create($request->all());
        if($status){
            return ['status' => true,"message" => 'Schedule created successfully'];
        }else{
            return ['status' => false, "message" => 'An error occured, please try again'];
        }
    }
    public function getScehdule($id){
        return SchoolSchedule::where('school_id',$id)->get();
    }
    
}
