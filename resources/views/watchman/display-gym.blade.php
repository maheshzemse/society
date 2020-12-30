@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>User Dashboard</title>
    

    <style>
    html,body{
        max-width:100%;
        overflow-x:hidden;
    }
    /* .maindiv{
        padding-top: -0.5rem;
    } */
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
    max-height:350px;
  }
  /* .box{
    background-color:#fbf2fc;
  } */

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
      <li class="nav-item">
        <a class="nav-link">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/visitor_list">See Visitiors List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Staff Attendance Record</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link">Manage Amenities</a>
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

<div class="card">
<br>

  <div class="card-header">
  <br>
  <a href="staff-amenities"><button>back</button></a>
  </div>
   
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-8">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title" align="center">Gym Booking List</h5>
        

      
          <div class="table-responsive">
          <table class="table table-striped" id="dataTables-example">
            <tr>
              <th>Sr.no</th>
              <th>name</th>
              <th>flat_no</th>
              <th>date</th>
              <th>slot</th>
            </tr>
            @foreach($gyms as $gym =>$t)
                                      <tr>
                                        <td>{{$gym+1}}</td>
                                        <td>{{$t->name}}</td>
                                        <td>{{$t->flat_no}}</td>
                                        <td>{{$t->date}}</td>
                                        <td>{{$t->slot}}</td>
                                      </tr>
                                      @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title">Notice</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });



</script>
