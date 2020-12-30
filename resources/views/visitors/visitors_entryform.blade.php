<?php
date_default_timezone_set("Asia/Kolkata");
$todays_date = date("Y-m-d");
$todays_time = date("H:i:s");
?>


@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    select:invalid { color: gray; }
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
    }

  #visitorentry_time:before {
  content:'Entry Time:';
  margin-right:.6em;
  color:gray;
}

#visitorentry_date:before {
content:'Date:';
margin-right:.6em;
color:gray;
}
  
    </style>
</head>
<body>
    
@section('content')
<!-- navbar -->
<div>
  <nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">Abhiruchi Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/visitors_record">See Visitiors List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="staffattendance">Staff Attendance Record</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="staff-amenities">Manage Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="">Manage Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Complaints</a>
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


<div class="card-body card-color">
    

  <div class="row">
        <div class="col-sm-12">
        <div class="card" >
    <!-- style="height:24rem;" -->
      <div class="card-body shadow p-3  rounded">
      <a href="/watchman" class="btn btn-primary">Back</a>
        <h5 class="card-title" align="center"> Visitors Entry Form</h5>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif      



 <div class="container">
  <form action="visitorsform" method="POST">
  @csrf
  <div class="form-group">
    <!-- <label for="inputName">Name</label> -->
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="">
  </div>

<div class="form-row"> 
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="contact_no" id="visitor_contact" placeholder="Contact No." pattern="[1-9]{1}[0-9]{9}" required="">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
    </div>
</div>


<div class="form-row"> 
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="visit_from" id="visit_from" placeholder="Coming From" required="">
    </div>

    <div class="form-group col-md-6">
        <select id="visit_to" class="form-control" name="visit_to" id="visitor_visiting_to" required="">
        <option value="" disabled selected>Visiting To</option>
            @foreach($users as $i)
            <option>{{$i['flat_no']}}&nbsp;{{$i['name']}}</option>
            @endforeach
        </select>
        
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="temperature" id="temperature" placeholder="Body Temperature in Degree Celcius"  required="">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="vehicle_no" id="vehicle_no" placeholder="Vehicle No." required="">
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="entry_date" id="visitorentry_date" value="<?php echo $todays_date;?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="entry_time" id="visitorentry_time" value="<?php echo $todays_time;?>" readonly>
    </div>

    <!-- <div class="form-group col-md-3">
    <small>Exit Date</small>
        <input type="date" class="form-control" name="exit_date" id="exit_date" placeholder="Exit Date">
    </div>
    <div class="form-group col-md-3">
        <small>Exit Time</small>
        <input type="time" class="form-control" name="exit_time" id="exit_time" placeholder="Exit Time">
    </div> -->
</div>


  
  
    
<!-- <div class="form-row">  -->
  
  <button type="submit" class="btn btn-primary float-right">Create Entry</button>
  <!-- </div> -->
  <br>
</form>




  </div>




      </div>
      </div>
    </div>
</div>
<hr>








@endsection

</body>
</html>

 