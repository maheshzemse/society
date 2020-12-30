<?php $number = 0; ?>
<?php $userid = (Auth::user()->society_id);?>
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
  <a class="navbar-brand" href="">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="flat_management">Manage Flats</a>
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

      <li class="nav-item">
        <a class="nav-link" href="/notice">Notice</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/usercomplaints">Complaints</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Upload Documents</a>
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

        
<!-- notice form -->
<br>
<br>
<div class="card">
  <div class="card-body" >
  <div class="row" >
  <div class="col-sm-6">
    <div class="card" style="height:24rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title" align="center">Notice</h5>
        <div class="table-responsive">
       <!-- form -->
       <form action="notice" method="POST"  >
  @csrf
<div class="row">
<div class="form-group col-lg-6">
        <label for="name">Name</label>
       <input  class="form-control" type="text" name="name" id="name">
     </div>
 <div class="form-group col-lg-6">
        <label for="exampleInputPassword1">Date</label>
       <input  class="custom-select" type="date" name="date">
     </div>
</div>
<div class="row">
  <div class="form-group col-lg-6">
        <label for="exampleInputPassword1">Notice Type</label>
       <select class="custom-select" name="notice_type" >
  <option >Due Payment Notice</option>
  <option ></option>
  <option >others</option>
        </select>
        </div>
 <div class="form-group col-lg-6">
        <label for="exampleInputPassword1">To </label>
       <input  class="custom-select" type="text" name="recipient_name">
     </div>
</div >
<div class="row">
<div class="form-group col-lg-12">
  <label for="exampleInputPassword1">Description</label>
  <input type="textarea" name="description" class="form-control">
</div>
</div>
<div align="center">
<button  type="submit" >Post Notice</button>
</div>
</form>
<!-- notice form -->
 </body>
</html>
