<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance_bill;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Models\payment;


class PaymentController extends Controller
{
   
  function submit( Request $request)

  {
       $ch = curl_init();

      // curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');


         curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');

      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_2f45cbe1a7450350c113124c4c0",
                  "X-Auth-Token:test_671be10754189e419d58eaf2238"));

    $id = Auth::user()->id;
    $amount = DB::table('maintenance_bills')
    ->where('id',17)->value('Total_Due');

    $id = Auth::user()->id;
    $contact_no = DB::table('users')
    ->where('id','=',$id)->value('contact_no');

    $name=Auth::user()->name;




    $payload = Array(
    'purpose' => 'Society Maintenance',
    'amount' => $amount,
    'phone' => $contact_no,
    'buyer_name' => $id,

     'redirect_url' => 'http://127.0.0.1:8000/instamojo_redirect',
        // 'redirect_url' => 'http://127.0.0.1:8000/submit',

    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'maheshsoftcare@gmail.com',
    'allow_repeated_payments' => false
     );
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$response=json_decode($response);
 // echo '<pre>' ;
 // print_r($response);

// return redirect($response);

  return redirect($response->payment_request->longurl);


 

}
 function instamojo_redirect(Request $request)
 {
  // echo '<pre>';
  // print_r($_GET);
    
     // $data= new payment;
    
     // $data->payment_id=$request->payment_id;
     // $data->payment_status=$request->payment_status;
     // $data->payment_request_id=$request->payment_request_id;
     // $data->save();

  $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/d66cb29dd059482e8072999f995c4eef/MOJO5a06005J21512197/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_2f45cbe1a7450350c113124c4c0",
                  "X-Auth-Token:test_671be10754189e419d58eaf2238"));

$response = curl_exec($ch);
curl_close($ch); 

echo $response;


  }



}


    


   