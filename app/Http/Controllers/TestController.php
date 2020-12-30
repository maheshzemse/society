<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Auth;
use App\Models\Society;

class TestController extends Controller
{
    
    //to get records to display
    public function list()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        return view('test', ['data'=>$data]);
    }



    // public function society_name()
    // {
    // 	$society_id=Auth::user()->society_id;
    // 	$data= Society::all()->where('society_name',$society_id);

    // 	return view('home',['data'=>$data]);
    // }






}
