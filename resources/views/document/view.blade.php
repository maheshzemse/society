<?php $number = 0; ?>

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
  .table-responsive{
    max-height:300px;
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
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

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
<br><br><br>
<div class="card">
  <div class="card-header">
  <img src="/images/softcare.png" alt="" style="float:left">
  </div>
   
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-8">
    <div class="card" style="height:23rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>View / Download Documents</b></h5>
        
        <!-- table -->
        <div class="table-responsive">
        <table class="table table-striped" border="1">
     	<tr>
     	  <th class="thcolor">Sr. No.</th>
     	  <th class="thcolor">title</th>
     	  <th class="thcolor">Description</th>
     	  <th class="thcolor">View</th>	
     	  <th class="thcolor">Download</th>

     	</tr>
     	@foreach($file as $key=>$data)
     	<tr>
     		<td>{{$data['id']}}</td>
     		<td>{{$data['title']}}</td>
            <td>{{$data['description']}}</td>
            <td style="width:90px"> <a href="/files/{{$data->id}}"><button class="btn btn-success">View</button></a></td>
            <td style="width:120px"><a href="/files/download/{{$data->file}}"><button class="btn btn-success">Download</button></a></td>


     	</tr>
       @endforeach
     </table>
     </div>
        <!-- table -->

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="height:23rem;">
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