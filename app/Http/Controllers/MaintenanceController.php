<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance_bill;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Auth;
class MaintenanceController extends Controller
{
    //to display users maintenance record for current month
   public function displaymonthlybilltouser()
   {
    // $today = date("Y-m-d");     
    $data= Maintenance_bill::all();
    // ->where('entry_date',date("Y-m-d"))->simplepaginate(3);
    return view('maintenance/maintenance',['bills'=>$data])->with('no', 1);
   }

   function AddMaintenance(Request $req)
    {
    	$m= new Maintenance_bill;
        $m->Member_name=$req->Member_name;
        $m->All_Municipal_Dues=$req->All_Municipal_Dues;
        $m->Administrative_and_General_Expenses=$req->Administrative_and_General_Expenses;
        $m->sinking_fund=$req->sinking_fund;
        $m->Periodic_Building_Maintenance=$req->Periodic_Building_Maintenance;
        $m->Common_Area_Utilization_Parking=$req->Common_Area_Utilization_Parking;
        $m->Non_Occupancy_Charges=$req->Non_Occupancy_Charges;
        $m->bill_date=$req->bill_date;
    	$m->Past_Arrears_of_Contribution=$req->Past_Arrears_of_Contribution;
        $m->Interest_Due=$req->Interest_Due;
        $m->Total_Due=$req->Total_Due;
        $m->save();
        $req->session()->flash('status','Meeting Scheduled Successfully');
    	return redirect('admin-maintenance');
    }


  
    public function displaybills()
    {
        $user_name=Auth::User()->name;
         $data=  Maintenance_bill::all()->where('Member_name',$user_name);
    
        $flat_no=DB::table('users')->where('name','=',$user_name)->value('flat_no');
         
          $due_date=date('Y-m-d',strtotime('+45 days'));

          $end_date=date('Y-m-d',strtotime('+30 days'));

         return view('maintenance/maintenance', compact('due_date','end_date','flat_no'), ['allbills'=>$data])->with('no', 1);
 
     }



    //   public function displaybills()
    // {
    //     $user_name=Auth::User()->name;
    //      $data= DB::table('users')
    //      ->join('maintenance_bills','Member_name',"=",'maintenance_bills.Member_name')
    
    //      ->where('name',$user_name)
    //      ->get(); 

    //      // $date=date('Y-m-d');
    //      // $date1=strtotime($date);
    //      //  $date2=strtotime("+30 day",$date1);

    //       $due_date=date('Y-m-d',strtotime('+15 days'));


    //      return view('maintenance/maintenance', compact('due_date'), ['allbills'=>$data])->with('no', 1);
 
    //  }


     public function display_members()
     {  
            

            $data= User::all();

            return view('admin/admin-maintenance',['data'=>$data]);

     }




}
