@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amenities</title>

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
      <li class="nav-item">
        <a class="nav-link"href="/admin">Home <span class="sr-only">(current)</span></a>
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

      <li class="nav-item active">
        <a class="nav-link" href="">Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/Inventory">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Reports">Complaints</a>
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
<div class="card">
    <div class="card-header">
    <a href="all_amenity_bookings" class="btn btn-primary">See all Bookings</a>
    </div>
    <div class="card-body card-color">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="height:27rem;">
                    <div class="card-body shadow p-3  rounded">
                        <h5 class="card-title">Register Amenities Here</h5>
                        @if(Session::get('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
                        <div class="table-responsive">
                        <!-- form -->
                        <form method="POST" action="amenities">
                        @csrf
                            <div class="form-group">
                                <label for="amenity_name">Add Amenity</label>
                                <input type="text" class="form-control" id="amenity_name" name="amenity_name">
                                <small id="amenityHelp" class="form-text text-muted">Add Amenities associated with your society</small>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                       
                        </form>
                        <br>
                        <h5><b>Examples:</b></h5>
                        <h5>Gymanasium</h5>
                        <h5>Swimming Pool</h5>
                        <h5>Play Zone</h5>
                        <!-- form -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card" style="height:27rem;">
                    <div class="card-body shadow p-3  rounded">
                        <h5 class="card-title">Registered Amenities</h5>
                        <table class="table table-bordered table-striped" id="dataTablesexample1">
                        <tr>
                          <th class="thcolor">ID</th>
                          <th class="thcolor">Amenity Name</th>
                        </tr>
                        @foreach($amenities as $amenity)
                        <tr>
                          <td>{{$amenity['id']}}</td>
                          <td>{{$amenity['amenity_name']}}</td>
                        </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

</body>
</html>