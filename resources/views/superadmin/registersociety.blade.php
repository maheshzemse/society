@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superadmin</title>

    <style>
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
  }
  .thcolor{
    background-color: #0f1442;
    color:white;
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
      <li class="nav-item active">
        <a class="nav-link" href="/registersociety"><b>Register Society</b></a>
      </li>

      <!-- <li class="nav-item">
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
        <a class="nav-link" href="/Reports">Complaints</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Upload Documents</a>
      </li> -->
     
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
<br><br>
<div class="card">
  <div class="card-header">
    
  
   </div>
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-4">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Register Society</b></h5>
        <!-- form -->
        <form action="registersociety" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-md-12">
            <small>Society Id</small> 
                <input type="text" id="society_id"  class="form-control" name="society_id">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
            <small>Society Name</small> 
                <input type="text" id="society_name"  class="form-control" name="society_name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Register Society</button>
        </form>
        <!-- form -->
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Registered Societies</b></h5>
        
       
<div class="card">
<div class="card-body">
<table class="table table-hover table-bordered " id="dataTables-example1">

  <thead>
    <tr>
      <!-- <th scope="col">Sr.No</th> -->
      <th class="thcolor" scope="col">Society ID</th>
      <th class="thcolor" scope="col">Society Name</th>
    </tr>
  </thead>
@foreach($registered as $i)
  <tbody>
    <tr>
     
      <td>{{$i->society_id}}</td>
      <td>{{$i->society_name}}</td>
      
    </tr>
    
  </tbody>
  @endforeach
</table>







</div>
</div>






      </div>
    </div>
  </div>
</div>
  
 
  
  </div>
</div>



@endsection

</body>
</html>
