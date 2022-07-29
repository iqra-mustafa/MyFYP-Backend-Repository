<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //For login Api
    public function logins(Request $request)
    {
        $user = User::where('name',$request->name)->first();
        if($user==null){
            return ['status' => false,'message' =>'Invalid Username!'];
        }else{
            if(Hash::check($request->password,$user->password)){
                $user->status = true;
                $user->message = "Login successfull";
                return $user;
            }else{
                return ['status' => false,'message' =>'Incorrect Password!'];
            }
        }
    }

    public function shows($id)
    {
       $users=User::find($id);
       if($users)
       {
        return response()->json(['users'=>$users],200); 
        $response =[
            'user'=>$users,
        ];
        //showing successfull message
        return response($response,200);
       }
       else{
        return response()->json(['message'=>"User not found."],404);
       }
          
    }

    //For register Api
    public function register(Request $request)
    {
        
     //Check for email
    $user = User::where('email',$request->email)->get();
    if(count($user) > 0){
        $user->status = true;
        $user->message = "Email Already Exists";
        return response($user,201);
    }
    $user = User::create([

        //Personal Details
        'name'=>$request->name,
        'email'=>$request->email,
        'V_ContactNumber' => $request->V_ContactNumber,
        'V_CNIC'=>$request->V_CNIC,
        'V_PresentAddress'=>$request->V_PresentAddress,
        'password'=>Hash::make($request->password),
       // 'V_ReEnterPassword'=>Hash::make($data['V_ReEnterPassword']),


        //Academic Details
        'V_UniversityName'=>$request->V_UniversityName,
        'V_Degree'=>$request->V_Degree,
        'V_Semester'=>$request->V_Semester,
        
        //Team Details
        'V_TeamName'=>$request->V_TeamName,
        'V_Day'=>$request->V_Day,
        'V_InstituteName'=>$request->V_InstituteName,
        'V_Designation'=>$request->V_InstituteName,
    ]);

    $token = $user->createToken('IqraProjectToken')->plainTextToken;
    $user->token = $token;
    $user->status = true;
    $user->message = "User Registered Successfully";
    return response($user, 201);
    }

//LOGIN
public function login(Request $request)
{
    $data=$request->validate([
        'name'=>'required|String',
        'email'=>'required|string|email|max:191',
        'password'=>'required|string',
        "password"=> 'required|confirmed'
    ]);

    //Getting first record in new variable user form the database

      $user = User::where('email', $data['email'])->first();

    //checking password is right or wrong and user exists or not

    if(!$user || !Hash::check($data['password'],$user->password))
      {
        return  response(['message'=>'Invalid Credentials'],401);
       }
    else
    {
    $token = $user->createToken('IqraProjectTokenLogin')->plainTextToken;
    }
    //Storing details 
    $response =[
        'user'=>$user,
        'token'=>$token,
    ];
    //showing successfull message
    return response($response,200);
}
//Deleting data
function delete($id)
{
    return  ['message'=>'Record Deleted'.$id];
}

}




    


