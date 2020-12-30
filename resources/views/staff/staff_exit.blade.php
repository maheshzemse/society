
<?php
date_default_timezone_set("Asia/Kolkata");
$todays_date = date("Y-m-d");
$todays_time = date("H:i:s");
?>
@extends('layouts.auth')
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
.navbar-default{
    background-color:#0f1442;
    border-color: white;
    }
</style>
</head>
<body>
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
        <br><br><br>
            <div class="card" >
                <div class="card-body shadow p-3  rounded">
                    <a href="/watchman" class="btn btn-primary">Back</a>
                        <h5 class="card-title" align="center"> Staffs Exit Form</h5>
                            <div class="container">
                                <form action="/staff_exit" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="{{$staff['id']}}" readonly>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{$staff['name']}}" readonly>
                                </div>

                                <div class="form-row"> 
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="date" value="{{$staff['date']}}" readonly>
                                    </div>
                                    
                                </div>

                                <div class="form-row"> 
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="entry_time" value="{{$staff['entry_time']}}" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="exit_time" value="<?php echo $todays_time;?>" readonly>
                                    </div>
                                </div>
                                                              
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>                            
</body>
</html>
