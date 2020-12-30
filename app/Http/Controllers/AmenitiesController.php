<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amenities_master;
use App\Models\amenity_booking;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class AmenitiesController extends Controller
{
    function RegisterAmenity(Request $req)
    {
        $this->validate($req, [
            'amenity_name'=>'required|max:50',
        ]);
        
        $data= new amenities_master;
    	$data->amenity_name=$req->amenity_name;
        $data->save();
        $req->session()->flash('status','Amenity Registered successfully');
    	return redirect('/amenities');
    }


    //display registered amenities on admin-amenities page
    public function ShowAmenities()
    {
          $data = amenities_master::all();
          return view('admin/amenities',['amenities'=>$data]);
    }
   
      
    // book amenity by user
    // public function amenity_booking(Request $request)
    // {
    // 	$booking= new amenity_booking;
    // 	$booking-> user_id = Auth::user()->name;
    // 	$booking-> amenity_name= $request->input('amenity_name');
    // 	$booking-> booking_date= $request->input('booking_date');
    // 	$booking-> booking_slot= $request->input('booking_slot');

    //     $booking->save();
    //     $request->session()->flash('status','Entry Submitted successfully');
    //     return redirect('amenity_bookings');

    // }


    public function amenity_booking(Request $request)
    {   
       

        $user_id = $request->input('user_id');
        $amenity_name = $request->input('amenity_name');
        $booking_date = $request->input('booking_date');
        $booking_slot = $request->input('booking_slot');
        
        $data = array(
            'user_id' =>$user_id,
            'amenity_name' => $amenity_name,
            'booking_date' => $booking_date,
            'booking_slot' => $booking_slot,
        );

        $count = DB::table('amenity_bookings')->where('amenity_name', $amenity_name)
                                ->where('booking_date',$booking_date)
                                ->where('booking_slot',$booking_slot)
                                ->count();
        
          

        if($count >= 1){
            $request->session()->flash('status1','Booked it Already!');
        }
        
        
        else{
            DB::table('amenity_bookings')->insert($data);
            $request->session()->flash('status','Booked successfully');
        }

    
        return redirect('amenity_bookings');
    }


    //to display todays bookings on user-amenity_bookings
   public function displaycurrentbooking()
   {
        $data= amenity_booking::all();
    //    ->where('booking_date',date("Y-m-d"));
       return view('amenity_bookings',['xyz'=>$data]);
   }

    
    
    
    //display 
    public function display_booking_amenity()
    {
        $data= amenity_booking::all();
        
        return view('display_booking_amenity',['dd'=>$data]);
    }
//display bookings on user

    public function display_bookingson_user()
    {
        $data= amenity_booking::all()
        ->where('booking_date',date("Y-m-d"));
        $data1= amenities_master::all();

        return view('amenity_bookings',['booking'=>$data,'amenity'=>$data1]);
    }

    // public function amenity_list()
    // {
    //     $data= amenities_master::all();
   	//     return view('amenity_bookings',['amenity'=>$data]);
    // }
    
}
