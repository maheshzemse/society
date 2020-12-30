<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\note;
use App\Models\User;
// use App\Models\book;

class admcontroller extends Controller
{
    

// function show()
//     {
//       $data= note::all();
//       return view('notice_list', ['note'=>$data]);
//     }


    // function showbook1()
    // {
    //   $data= book::paginate(6);
    //   return view('manage_flats', ['book'=>$data]);
    // }

    // function showbook2()
    // {
    //   $data= book::paginate(6);
    //   return view('booking2', ['book'=>$data]);
    // }

    //  function addData(Request $req)
    // {
    //   $note= new note;
    //   $note->id=$req->id;
    //   $note->name=$req->name;
    //   $note->date=$req->date;
    //   $note->notice_type=$req->notice_type;
    //   $note->recipient_name=$req->recipient_name; 
    //   $note->description=$req->description;
    //   $note->save();
    //   return redirect('home');
      
    // }


    function showflatinfotoadmin()
    {
      $data= User::paginate(5);
      return view('admin/flat_management', ['users'=>$data]);
    }


    function delete($id)
    {
      $data= User::find($id);
      $data->delete();
      return redirect('flat_management');
    }

    function showData($id)
    {
      $data= User::find($id);
      return view('admin/edit1', ['data'=>$data]);

    }

    function update(Request $req)
    {
    
      $data= User::find($req->id);
      $data->name=$req->name;
      $data->flat_no=$req->flat_no;
      $data->contact_no=$req->contact_no;
      $data->occupant=$req->occupant;
      $data->tenant_name=$req->tenant_name;
      $data->tenant_contact=$req->tenant_contact;
      $data->save();
      return redirect('flat_management');
    }

}