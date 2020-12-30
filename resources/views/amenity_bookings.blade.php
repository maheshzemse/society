<?php 
$userid = (Auth::user()->name)
?>

@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <title>Document</title>

    <style>
    html,body{
        max-width:100%;
        overflow-x:hidden;
    }
    /* .maindiv{
        padding-top: -0.5rem;
    } */
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
  }
  .card-color{
    background-color:#F4F6F9;
    border-color: white;
  }
  .thcolor{
    background-color: #0f1442;
    color:white;
  }
  .table-responsive{
    max-height:350px;
  }
 

    </style>
</head>
<body>
@section('content')
<!-- navbar -->
<div>
  <nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/shopping">Shopping</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" ><b>Amenities Booking</b></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">Complaints</a>
      </li>
     
    
    
    
    </ul>
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{__(Auth::user()->name)}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
  </div>
  </nav>
<!-- navbar -->
<br>
<div class="card">
  <!-- <div class="card-header">
  <a href="display_booking_amenity" class="btn btn-primary">See Bookings</a>
  </div> -->
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-4">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
      <h5 class="card-title"><b>Book Amenities Here</b></h5>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif 


@if(Session::get('status1'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('status1')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif 

        <div class="">
       <!-- form -->
       <form method="POST"action="amenity_bookings" >

  @csrf

  <div class="form-group">
    
    <input type="text" hidden name="user_id" id="user_id" class="form-control" placeholder="User Id" value="<?php echo $userid ?>"
    required>
    @error('user_id')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>










       <div class="form-group">
       <select class="custom-select @error('amenity_name') is-invalid @enderror" name="amenity_name" required >
  <option disabled selected>Select Aminities</option>

          @foreach($amenity as $i)
            <option>{{$i['amenity_name']}}</option>
            @endforeach

     
 </select>
 @error('amenity_name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Select Date</label>
    <!-- <input type="date" name="booking_date" class="form-control datepicker" autocomplete="off"> -->
    <input type="date" name="booking_date" id="datepicker" class="form-control" placeholder="date" required>
    <!-- <input type="date" id="datepicker" /> -->
    @error('booking_date')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Time Slot</label>

       <select class="custom-select "name="booking_slot" required >
  <option selected>Select Time Slot</option>
  <option >7AM-9AM</option>
  <option >9AM-11AM</option>
  <option >11AM-1AM</option>
        </select>
        @error('booking_slot')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
  
  <div class="form-group col-lg-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
       <!-- form -->
        </div>

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Todays Bookings</b></h5>
        <div class="table-responsive">
        <table class=table border=1>
        <tr>
        <th class="thcolor">Amenity Name</th>
        <th class="thcolor">Booking Date</th>
        <th class="thcolor">Booking Slot</th>
        </tr>
      @foreach($booking as $b)
      <tr>
        <td>{{$b['amenity_name']}}</td>
        <td>{{$b['booking_date']}}</td>
        <td>{{$b['booking_slot']}}</td>
        
        </tr>
      @endforeach
     
        </table>
        </div>
      </div>

      <!-- <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Previous Bookings</b></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div> -->
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card bg-dark text-white" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        <h3 class="card-title"><b>Rules</b></h3>
        <h5 class="card-title"><b>Timings:</b></h5><b>Morning:</b> 7.00 am - 11.00 am <b>Evening:</b> 4.00 pm - 8.00 pm 
        <hr>
        <P>1. Failure to comply with the below rules may result in loss of amenities privileges.</P>
        <p>2. Users are responsible for their own property and safety. </p>
        <p>3. Smoking, eating and drinking (except water) is prohibited in the amenities section at all times.</p>
        <p>4. The member must have valid amenities membership.</p>
        <p>5. Respect the amenity staff.</p>
        <p>6. Hygiene for yourself and others is must.</p>
        <p>7. care for the facility and equipment used.</p>
        </div>

      
    </div>
  </div>
</div>
  
 
  
  </div>
</div>



@endsection 
<!-- <script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: new Date()
    });
</script>  -->
 
</body>
</html>
