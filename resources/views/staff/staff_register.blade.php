@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
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
        <h3 class="card-title" align="center">Staff Registration Form</h3>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif      



 <div class="container">
  <form action="staff_register" method="POST">
  @csrf

<div class="form-row"> 
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="society_id" id="society_id" placeholder="Society ID" required="">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender"  required>
    </div>
    <div class="form-group col-md-4">
        <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birthdate" required>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No" required>
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="current_address" id="current_address" placeholder="Current Address"  required>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="permanent_address" id="permanent_address" placeholder="Permanent Address" required>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required>
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" placeholder="Aadhar Card No"  required="">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="pan_no" id="pan_no" placeholder="Pan Card No">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="working_status" id="working_status" placeholder="Working Status" required>
    </div>
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

 