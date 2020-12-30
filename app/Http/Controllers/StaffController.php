<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\staff_attendance;
use Session;

class StaffController extends Controller
{
    	public function register(Request $req)
		{
            $user=new Staff;
            $user ->society_id=$req->input('society_id');
        	$user ->name=$req->input('name');
        	$user ->gender=$req->input('gender');
        	$user ->birthdate=$req->input('birthdate');
        	$user ->contact_no=$req->input('contact_no');
        	$user ->current_address=$req->input('current_address');
        	$user ->permanent_address=$req->input('permanent_address');
        	$user ->pincode=$req->input('pincode');
        	$user ->aadhar_no=$req->input('aadhar_no');
        	$user ->pan_no=$req->input('pan_no');
        	$user ->working_status=$req->input('working_status');
            $user->save();
            $req->session()->flash('status','Entry Submitted successfully');
            return redirect('/staff_register');
		}

		public function Staff_attendance(Request $req)
		{
            $staff=new staff_attendance;
            $staff ->staff_id=$req->input('staff_id');
            $staff ->name=$req->input('name');
            $staff ->date=$req->input('date');
            $staff ->entry_time=$req->input('entry_time');
                       
            $staff->save();
            $req->session()->flash('status','Entry Submitted successfully');
            return redirect('/staff_entryform');
		}

		public function showstaffattendance()
    {
        $staff=staff_attendance::all();
        return view('staff/staffattendance',['staff_attendances'=>$staff]);
    }

    //To update staff_attendances table  for exit record
    public function showData($id)
    {
      $data=staff_attendance::find($id);
    return view('staff/staff_exit',['staff'=>$data]);
   
    }

    //To update vistior table  for exit record
    public function Update(Request $request)
    {
        $staff=staff_attendance::find($request->id);
                    
            
        $staff->name= $request->name;
        $staff->date= $request->date;
        $staff->entry_time= $request->entry_time;
        $staff->exit_time=$request->exit_time;
        
        $staff->save();
        $request->session()->flash('status','Entry Submitted successfully');
        return redirect('/staffs_record');
    } 

    // show staffs on staffs_record 
    public function ShowStaffs()
    {
            $data = staff_attendance::all()
            ->where('exit_time', null);
            return view('staff/staffs_record',['staffs'=>$data]);
    }

}
