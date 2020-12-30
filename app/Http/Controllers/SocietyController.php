<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Society;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
class SocietyController extends Controller
{
    public function AddSociety(Request $request)
    {
        $society = new Society;
        $society->society_id= $request->society_id;
        $society->society_name= $request->society_name;
        $society->save();
        $request->session()->flash('status','entry Submitted successfully');
        return redirect('/registersociety');
        
    }

    public function display_registered_societies()
    {
        $data= Society::all();
        return view('superadmin/registersociety',['registered'=>$data]);
    }

    public function display_flatinfo_toAdmin()
    {
        $data= User::all();
        return view('admin/flat_management',['flats'=>$data]);
    }
    
    
    
    
    
    
    
    
    
    // public function Show_SocietyName()
    // {
        
    //     $data = DB::table('society_master')->select('society_name')
    //     ->where('id',1001)
    //     ->get();
    //     // return view('admin/admin',['society'=>$data]);
    // }
        
        
        
        
        
        
        // $userid = (Auth::user()->society_id);
        // $data = DB::table('society_master')
        //     ->select('society_name')
        //     ->where('id', 1002)
        //     ->get();
        //     return view('admin/admin',['society'=>$data]);
        
        
        
        
        //$data = Society::all()
        //->where('id', '$userid');
       // return view('admin/admin',['society'=>$data]);
    // }
    //     $data= DB::table('society_master')
    //     ->join('admins', 'society_id', '=', 'admins.society_id')
    //     ->get();
    //    return view('admin/admin',['names'=>$data]);
        
    
}
