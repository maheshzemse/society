<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
use App\Models\notice;
use App\Models\User;
use App\Models\meeting;
use App\Models\Society;
use Session;
use Auth;


class VisitorsController extends Controller
{
    // public function visitors()
    // {
    //     return view('/visitors.visitors');
    
    // }
    public function AddVisitors(Request $request)
    {
        $visitor = new Visitor;
        $visitor->name= $request->name;
        $visitor->contact_no= $request->contact_no;
        $visitor->address= $request->address;
        $visitor->visit_from=$request->visit_from;
        $visitor->visit_to=$request->visit_to;
        $visitor->temperature=$request->temperature;
        $visitor->vehicle_no=$request->vehicle_no;
        $visitor->entry_date=$request->entry_date;
        $visitor->entry_time=$request->entry_time;
        $visitor->save();
        $request->session()->flash('status','entry Submitted successfully');
        return redirect('/visitors_entryform');
        
    }

//To update vistior table  for exit record
    public function showData($id)
    {
      $data=Visitor::find($id);
    return view('edit',['visitor'=>$data]);
   
    }
//To update vistior table  for exit record
    public function Update(Request $request)
    {
        $visitor=Visitor::find($request->id);
                    
            
        $visitor->name= $request->name;
        $visitor->contact_no= $request->contact_no;
        $visitor->address= $request->address;
        $visitor->visit_from=$request->visit_from;
        $visitor->visit_to=$request->visit_to;
        $visitor->temperature=$request->temperature;
        $visitor->vehicle_no=$request->vehicle_no;
        $visitor->entry_date=$request->entry_date;
        $visitor->entry_time=$request->entry_time;
        $visitor->exit_date=$request->exit_date;
        $visitor->exit_time=$request->exit_time;
        $visitor->save();
        $request->session()->flash('status','Entry Submitted successfully');
        return redirect('/visitors_record');
    } 

    // show visitors on visitors_record 
    public function ShowVisitors()
    {
            $data = Visitor::all()
            ->where('exit_time', null);
            return view('visitors/visitors_record',['visitors'=>$data]);
            
        }


        
  

    //show visitors record through api
    public function VisitorsData()
    {
        return Visitor::all();
        
    }

    //show flat n user name on visitors entry form
    public function show_flatusername()
   {
       
       $data= User::all();
       return view('visitors/visitors_entryform',['users'=>$data]);
   }



   //to display todays visitors on
   public function displayonhome()
   {
    // $today = date("Y-m-d");     
    $data= visitor::where('entry_date',date("Y-m-d"))->simplepaginate(3);
    
       
    $a = notice::max('id'); 
    $data1= notice::all()
    ->where('id','=',$a);

    $b = meeting::max('id'); 
    $data2= meeting::all()
    ->where('id','=',$b);

    // $id= Auth::User()->id;
    // $data3= Society::all()
    // ->where('user_id', $id);

        // $society_id=Auth::user()->society_id;
        // $data3= Society::all()->where('society_name',$society_id);
        $user=Auth::user()->society_id;
    $soc=DB::table('society_master')->where('society_id','=',$user)->value('society_name');
    
    return view('home',compact('soc'),['visitors'=>$data,'notice'=>$data1, 'meeting'=>$data2])->with('no', 1);
   }

//    public function displaynoticetouser()
//         {
//             $today = date("Y-m-d");      
//             $data= notice::all()
//             ->where('expiry_date','>=' , $today);
//             return view('home',['notice'=>$data]);
//         }






   public function displayonadmin()
   {
    $data= visitor::where('entry_date',date("Y-m-d"))->simplepaginate(3);
    // return view('admin/admin',['visitors'=>$data])->with('no', 1);

    $a1 = notice::max('id'); 
    $data1= notice::all()
    ->where('id','=',$a1);

    $b1 = meeting::max('id'); 
    $data2= meeting::all()
    ->where('id','=',$b1);

    return view('admin/admin',['visitors'=>$data,'notice'=>$data1, 'meeting'=>$data2])->with('no', 1);
   
    }

}
