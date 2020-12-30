<?php $number = 0; ?>

@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
  .w-5{
    width:50px;
  }
  
    </style>
</head>
<body>
@section('content')
<!-- navbar -->
<div>
  <nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">{{$soc}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home"><b>Home</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/shopping">Shopping</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenity_bookings">Amenities Booking</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">Complaints</a>
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
  <img src="/images/softcare.png" alt="" style="float:left">
  <a href="/files"><button class="btn btn-success me-md-2" type="button" style="float:right">View / Download Documents</button></a>
  </div>
  
  
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-6">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Todays Visitors</b></h5>
        

        <div style="overflow-x:auto;">
        
        <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type Vehicle no." title="Type Vehile No"> -->
        <!-- <br><br> -->
        
        <table class="table table-bordered table-striped" id="myTable">
<tr>
<th class="thcolor">Sr.No.</td>
<!-- <th>Visitors Name</th> -->
<th class="thcolor">Temp.</th>
<th class="thcolor">Visiting To</th>
<th class="thcolor">Vehicle No</th>
<th class="thcolor">Entry Date</th>
<th class="thcolor">Entry Time</th>


</tr>
@foreach($visitors as $visitor)
<tr>
<td>{{ $no++ }}</td>
<!-- <td>{{$visitor['id']}}</td> -->
<!-- <td>{{$visitor['name']}}</td> -->
<td>{{$visitor['temperature']}}</td>
<td>{{$visitor['visit_to']}}</td>
<td>{{$visitor['vehicle_no']}}</td>
<td>{{$visitor['entry_date']}}</td>
<td>{{$visitor['entry_time']}}</td>


</tr>








@endforeach

</table>

</div>
<br>
<span>{{$visitors->links()}}</span>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <!-- cards -->

        <div class="card  border-primary mb-3" style="max-width: 38rem;">
  <div class="card-header text-white bg-info"><h5>Notices</h5></div>
  <div class="card-body text-primary">
    <!-- Notice -->
    <div style="overflow-x:auto;">
        <table class="table table-bordered table-striped" id="myTable">
            
            @foreach($notice as $a)
            <tr>
            <td>{{$a['notice_date']}}</td>
            <td>{{$a['description']}}</td>
            
                       
            
            <!-- <button type="button" class="btn btn-danger">Exit</button></a></td> -->
            </tr>
        @endforeach
        </table>
        </div>
    <!-- Notice -->
    
  </div>
  <p align="center">To See All The Notices <a href="/allnotices_member">Click Here</a></p>
</div>

<div class="card border-success mb-3" style="max-width: 38rem;">
  <div class="card-header card text-white bg-success"><h5>Meetings</h5></div>
  <div class="card-body text-secondary">
    <!-- meeting -->
    
    <div style="overflow-x:auto;">
        <table class="table table-bordered table-striped" id="myTable">
            
            @foreach($meeting as $a)
            <tr>
            <td>{{$a['date']}}</td>
            <td>{{$a['time']}}</td>
            <td>{{$a['agenda']}}</td>
            
                       
            
            <!-- <button type="button" class="btn btn-danger">Exit</button></a></td> -->
            </tr>
        @endforeach
        </table>
        </div>
    
    <!-- meeting -->
   
  </div>
  <p align="center">To See All The Meetings <a href="/allmeetings_member">Click Here</a></p>
</div>


        <!-- cards -->
        



        
      </div>
    </div>
  </div>
</div>
  
 
  
  </div>
</div>



@endsection    
</body>
</html>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
