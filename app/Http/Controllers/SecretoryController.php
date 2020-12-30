<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\secretory;
use App\Models\treasurer;
use App\Models\notice;

use DB;

use Carbon\Carbon;



class SecretoryController extends Controller
{
    public function secretory_login(Request $req)
    {
    	// return print_r($req->all());

    	{

    	$log= secretory::where("mobile",$req->input('mobile'))->get();

    	if(($log[0]->password)==$req->input('password'))
    	{
    	 $req->Session()->put('user',$log[0]->name);
    	 return redirect('display_secretory');
    	}
    	else
    	{
    	 return redirect('secretory_login');
    	}
   	
   	 }
}

public function notice(Request $req)
{
$note= new notice;
$note->notice=$req->input('notice');
$note->date=$req->input('date');
$note->save();

return redirect('display_secretory');
}

public function display_notice()
{

// $data=notice::where('date',Carbon::now()->subDays(7))->get();

// $date=Carbon::today()->subDays(7);

// $data=DB::table('notice')->where('date','>=','$date')->get();



$date = \Carbon\Carbon::today()->subDays(3);

$data = notice::where('date', '>', $date)->orderBy('date','desc')->get();






return view('display_secretory',['data'=>$data]);


}




}
