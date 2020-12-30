

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
      <li class="nav-item">
        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=" ">Schedule Meetings</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Notices</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/admin-maintenance">Audit Provisions</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenities">Insurance</a>
      </li>
     
      <!-- <li class="nav-item">
        <a class="nav-link" href="/Inventory">Member Objections</a>
      </li> -->
      
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
    <h1>{{__(Auth::user()->society_id)}}</h1>
  
   </div>
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-4">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Schedule Meetings</b></h5>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif    
        <!-- form -->
        <form action="schedule-meeting" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <label for="notice_type"> Meeting Agenda</label>
            <input type="text" class="form-control" name="agenda" required="">        
          </div>
        </div><br>

      <div class="form-group">
      <label for="description">Meeting Points</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter Meeting Points Here...."></textarea>
      </div>


        <div class="row">
          <div class="col-sm-6">
            <label for="expiry_date">Meeting Date</label>
            <input type="date" class="form-control" name="date" required="">
          </div>
          <div class="col-sm-6">
            <label for="Meeting Time">Meeting Time</label>
            <input type="time" class="form-control" name="time" required="" >
          </div>
        </div>
        <br>

         <button class="btn btn-primary" type="submit">Submit</button>
    </form>
        <!-- form -->


      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Meeting Details</b></h5>
        
        <div class="table-responsive">
       
          <div class="card">
  




    <table border="1" class="table-striped" >
      <tr>
        <th>id</th>
        <th>Agenda</th>
        <th> Points</th>
        <th width="100px">Meeting Date</th>
        <th width="100px">Time</th>
      </tr>
@foreach($schedulemeeting as $s)      
      <tr>
        <td>{{$s['id']}}</td>
        <td>{{$s['agenda']}}</td>
        <td>{{$s['description']}}</td>
        <td>{{$s['date']}}</td>
        <td>{{$s['time']}}</td>
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
</div>



@endsection

</body>
</html>
