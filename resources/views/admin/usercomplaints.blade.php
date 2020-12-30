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
    background-color: #0f1442;
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

<div class="card">
  <div class="card-header">
  featured
  </div>
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-12">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title">Todays Visitors</h5>
        

        <div class="table-responsive">
        <table border="1" class="table">
<tr>
<th class="thcolor">Id</td>
<th class="thcolor">User Id</th>
<th class="thcolor">Complaint Type</th>
<th class="thcolor">Description</th>
<th class="thcolor">Date</th>
<th class="thcolor">Status</th>
<th class="thcolor">Action</th>
<th class="thcolor">View Details</th>
</tr>

@foreach($complaints as $c)

<tr>
<td>{{$c['id']}}</td>
<td>{{$c['user_id']}}</td>
<td>{{$c['complaint_type']}}</td>
<td>{{$c['description']}}</td>
<td>{{$c['complaint_date']}}</td>
<td>{{$c['status']}}</td>
<td><a href={{"solve/".$c['id']}}><button type="button" class="btn btn-success">Take Action</button></a></td>
<td><a href={{"view/".$c['user_id']}}><button type="button" class="btn btn-success">View</button></a></td>


</tr>
@endforeach


</table>
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