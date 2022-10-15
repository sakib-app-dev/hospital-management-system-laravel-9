<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;

use App\Notifications\sendMailNotification;
// use Notification;
use Illuminate\Support\Facades\Notification;
class AdminController extends Controller
{
    public function index()
    {
        return view ('admin.add_doctor');
    }

    public function upload_info(Request $request)
    {
        $doctor=new doctor;
        $img=$request->img;
        $imgname=time().'.'.$img->getClientOriginalExtension();

        $request->img->move('doctorimage',$imgname);

        $doctor->image=$imgname;


        $doctor->name=$request->doctor_name;
        $doctor->phone=$request->phone;
        $doctor->spaciality=$request->spaciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('msg','Doctor Added Successfully..');

    } 



    public function view_appoint()
    {
        $data=appointment::all();
        return view('admin.view_appointment',compact('data'));
    }

    public function approve_appoint($id)
    {
        $data=appointment::find($id);

        // $appoint= new appointment;
        $data->status="Approved";
        $data->save();
        return redirect()->back();
    }
    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        // $appoint= new appointment;
        $data->status="Canceled";
        $data->save();
        return redirect()->back();
    }



    public function send_email($id)
    {
        $data=appointment::find($id);
        return view('admin.send_email',compact('data'));
    }

    public function sending_mail(Request $req,$id)
    {
        $data=appointment::find($id);

        $details = [
            'greeting' => 'greeting',

            'body' => 'body',

            'action_text' => 'action_text',

            'action_url' => url('/'),

            'end_part' => 'end_part'
        ];

        Notification::send($data,new sendMailNotification($details));


        return redirect()->back();

        
    }




    public function doctors_list()
    {
        $data=doctor::all();
        return view('admin.doctors_list',compact('data'));
    }

    public function edit_doctor_info($id)
    {

        $data=doctor::find($id);
        
        return view('admin.edit_doctor',compact('data'));

    }

    public function editdoctor(Request $req,$id)
    {
        $doctor=doctor::find($id);

        $doctor->name=$req->name;
        $doctor->phone=$req->phone;
        $doctor->spaciality=$req->spaciality;
        $doctor->room=$req->room;
        $image=$req->img;

        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->img->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }


        $doctor->save();
        return redirect()->back()->with('msg','Information Updated Successfully');
    }
    public function delete_doctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
}
