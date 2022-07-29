<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    public function index(){
        //$users = User::where('type',1)->get();

       $users = User::all();
       return view('volunteer.volunteers',compact('users'));

    }
    function edit($id)
    {
        $data = User::find($id);

        
        return view('volunteer.updateVolunteer',compact('data'));
       

    }
    public function update(Request $request)
    {
        
        $request->validate([
            'V_Designation' => 'required',
        ]);
        
              $users=User::find($request->get('id'));

              $users->V_Designation==$request->get('V_Designation');

              $users->save();
              return redirect('volunteers');
         
    }
}

              //$users->name==$request->get('name');
              //$users->email==$request->get('email');
              //$users->V_ContactNumber==$request->get('V_ContactNumber');
              //$users->V_CNIC==$request->get('V_CNIC');
              //$users->V_PresentAddress==$request->get('V_PresentAddress');
              //$users->V_UniversityName==$request->get('V_UniversityName');
              //$users->V_Degree==$request->get('V_Degree');
              //$users->V_Semester==$request->get('V_Semester');
              //$users->V_TeamName==$request->get('V_TeamName');
              //$users->V_Day==$request->get('V_Day');
              //$users->V_InstituteName==$request->get('V_InstituteName');