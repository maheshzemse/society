<?php 
$todays_date=date("Y-m-d");
?>
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
  .card-color{
    background-color:#F4F6F9;
    border-color: white;
  }
  .thcolor{
    background-color: #5B2C6F;
    color:white;
  }
  .table-responsive{
    max-height:360px;
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
      <li class="nav-item ">
        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Manage Flats</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Accounts</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/admin-maintenance">Maintenance & Utility Bills</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenities">Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/Inventory">Parking</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Reports">Complaints</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Upload Documents</a>
      </li>

      <li>
      <a >
      <div class="logo-image">
            &nbsp;<img src="/images/softcare.png" class="img-fluid">
      </div>
      </a>
      </li>

      <li class="nav-item">
        <img src="images/softcare.png" alt="">
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
  
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-8">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"></h5>
        
<form action="/solve" method="POST">
   @csrf
  <div class="row">
    <div class="col-sm-6">
        <input type="hidden" class="form-control" name="id" value="{{$complaint['id']}}" >
    </div>
  </div><br>  

  <div class="row">
    <div class="col-sm-6">
     <small> user id </small>
      <input type="text" class="form-control" name="user_id"  value="{{$complaint['user_id']}}" readonly="">
    </div>

     <div class="col-sm-6">
       <small> complaint type </small>
      <input type="text" class="form-control"  name="complaint_type"  value="{{$complaint['complaint_type']}}" readonly="">
    </div>
  </div>
  <div class="row">
   
  </div><br>  
  <div class="row">
    <div class="col-sm-12">
       <small> description </small>
      <!-- <input type="text" class="form-control" name="description"  value="{{$complaint['description']}}" > -->
      <textarea rows="3" style="width: 100%" name="description" readonly=""> {{$complaint['description']}}</textarea>
    </div>
  </div><br>
  <div class="row">
    <div class="col-sm-4">
       <small> complaint date </small>
      <input type="text" class="form-control" name="complaint_date"  value="{{$complaint['complaint_date']}}" readonly="" >
    </div>

    <div class="col-sm-4">
       <small> Resolved date </small>
      <input type="text" class="form-control" name="resolved_date"  value="<?php echo $todays_date;?>" readonly="" >
    </div>

    <div class="col-sm-4">
       <small> If Issue Resolved, Please Update Status </small>
      <!-- <input type="text" class="form-control" name="status"  value="{{$complaint['status']}}"> -->
      <select name="status" class="form-control">
        <option value="{{$complaint['status']}}"> Pending</option>
        <option value="Resolved"> Resolved</option>
      </select>
    </div>
  </div><br>  
  
  <div class="row">
    <div class="col-sm-6">
       <button type="submit"  class="btn btn-success mb-2">Submit</button>
    </div>
  </div><br>
</form>
        

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
  
 
  
  </div>
</div>



@endsection

</body>
</html>