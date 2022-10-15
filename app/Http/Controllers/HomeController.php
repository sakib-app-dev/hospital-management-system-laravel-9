<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //for auth connection User table
use App\Models\User; //model class connection table
use App\Models\Doctor; 
use App\Models\Appointment; 

class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor_info= doctor::all();
                return view('user.home',compact('doctor_info'));
                // return view('user.home');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        }
        
        else
        {
        $doctor_info= doctor::all();
        return view('user.home',compact('doctor_info'));
        }
    }

    public function appointment(Request $req)
    {

        $data= new appointment;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->date=$req->date;
        $data->doctor=$req->doctor;
        $data->phone=$req->phone;
        $data->massage=$req->message;
        $data->status="In Prograss";
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('msg','Appointment request succesfully... We will contact with you soon...');
        
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            
            $user_id=Auth::user()->id;
            $appoint=appointment::where('user_id',$user_id)->get();

            return view('user.myappointment',compact('appoint'));

        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {

        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();

    }
    
}
