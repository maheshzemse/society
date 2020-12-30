<?php

namespace App\Http\Controllers;
use App\Models\complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ComplaintController extends Controller
{
    function addData(Request $req)
    {
    	$complaint= new complaint;
        $complaint->user_id=Auth::user()->id;
        $complaint->complaint_type=$req->complaint_type;
        $complaint->description=$req->description;
    	$complaint->complaint_date=$req->complaint_date;
    	$complaint->save();
    	return redirect('complaints');
    }

      
   
    public function displayonadmin()
    {
               
        $data= complaint::all()
        ->where('status','Pending');
        // ->where('Exit_time',  '2020-11-25');
        return view('admin/usercomplaints',['complaints'=>$data]);
    }


    public function showData1($id)
    {
       $data=complaint::find($id);
     return view('admin/solve',['complaint'=>$data]);
    
   // return complaint::find($id);
    }

    function update(Request $req)
    {
        //$complaint= new complaint;
        $complaint=complaint::find($req->id);
        $complaint->user_id=$req->user_id;
        $complaint->complaint_type=$req->complaint_type;
        $complaint->description=$req->description;
        $complaint->complaint_date=$req->complaint_date;
        $complaint->status=$req->status;
         $complaint->resolved_date=$req->resolved_date;
        $complaint->save();
        return redirect('/usercomplaints');
    }



     public function displayonuser()
    {
               
        $user_id = Auth::user()->id;
        $data= complaint::all()
        ->where('user_id', $user_id);
        return view('complaints/complaints',['complaints'=>$data])->with('no', 1);
    }

    public function userdetails($id)
    {
   
        $data=user::find($id);
        return view('admin/view',['user'=>$data]);
   
    }
}
