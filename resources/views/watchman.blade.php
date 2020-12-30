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
        <a class="nav-link" href="/staffs_record">Staff Attendance Record</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Amenities</a>
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

 <!-- for three cards -->
<div class="container">
<br><br>
  <div class="card">
    <div class="card-header text-right">
    <a href="/staff_register" class="btn btn-primary">Register Staff Here</a>
    </div>
    <div class="card-body">
      <!-- inner cards -->
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
          <br>
          <center><img src="images/visitor.png" class="rounded-circle" height="150" width="150" alt="..."></center>
          <br>
            <div class="card-body card text-center">
            
              <h5 class="card-title">Visitors Record</h5>
              
              <a href="/visitors_entryform" class="btn btn-success" style="margin: 5px">Visitors Entry</a>
              <a href="/visitors_record" class="btn btn-danger" style="margin: 5px">Visitors Exit</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
          <br>
          <center><img src="images/staff.png" class="rounded-circle" height="150" width="150" alt="..."></center>
          <br> 
            <div class="card-body card text-center">
              <h5 class="card-title">Staff Record</h5>
              
              <a href="/staff_entryform" class="btn btn-success" style="margin: 5px">Staff Entry</a>
              <a href="/staffs_record" class="btn btn-danger" style="margin: 5px">Staff Exit</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
          <br>
          <center><img src="images/user.png" class="rounded-circle" height="150" width="150" alt="..."></center>
          <br>
            <div class="card-body card text-center">
              <h5 class="card-title">Members Record</h5>
              
              <a href="#" class="btn btn-success" style="margin: 5px">Members Entry</a>
              
              <a href="#" class="btn btn-danger" style="margin: 5px">Members Exit</a>
            </div>
          </div>
        </div>
      </div>
     
      <!-- inner cards -->
    </div>
  </div>

</div>
<br>
 <!-- for three cards -->
@endsection

</body>
</html>