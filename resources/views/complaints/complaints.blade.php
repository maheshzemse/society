<?php $number = 0; ?>
<?php
date_default_timezone_set("Asia/Kolkata");
$todays_date = date("Y-m-d");
$todays_time = date("H:i:s");
?>
@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>

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
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenity_bookings">Amenities Booking</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=""><b>Complaints</b></a>
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
  <!-- <div class="card-header">
  featured
  </div> -->
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-4">
    <div class="card" style="height:30rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title">Complaint</h5>
        
<form action="complaints" method="POST">
                        @csrf


                        <div class="form-group row">
                          <div class="col-md-12">
                            <small>complaint Date</small> 
                                <input id="complaint_date" type="text" class="form-control" name="complaint_date" value="<?php echo $todays_date ?>" readonly>
                            </div>
                        </div>





                        <div class="form-group row">
                          <div class="col-md-12">
                            <small>complaint Type</small> 
                            <select name="complaint_type" id="complaint_type" style="color:grey;width: 100%;height: 40px">

                        <option value="High Maintainance Charges">High Maintainance Charges</option>
                        <option value="Parking woes">Parking woes</option>
                        <option value="Unfair or Irregular Elections">Unfair or Irregular Elections</option>
                        <option value="Safety Neglation">Safety Neglation</option>
                        <option value="Staff Issues">Staff Issues</option>
                        <option value="Incomplete/Fraudulent Audits">Incomplete/Fraudulent Audits</option>
                        <option value="Water Issues">Water Issues</option>
                        <option value="Non-Occupancy Charges">Non-Occupancy Charges</option>
                        <option value="Nuisances caused By Residents">Nuisances caused By Residents</option>
                        <option value="Electricity Issues">Electricity Issues</option>
                        <option value="Corrupt Committee Members">Corrupt Committee Members </option>
                        <option value="Maintainance Due Issues">Maintainance Due Issues</option>
                        <option value="Others">Others</option>        
                                    
                     </select>

                                @error('complaint_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-12">
                            <small>Description</small> 
                               <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="email" rows="4"></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                                 
                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div> -->
                    </form>



</form>



      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="height:30rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title">Complaints</h5>
       

<div class="table-responsive">  

<table border="1" class="table table-striped" id="one">
          <!-- <h3 class="card-title" align="center">Visitors List</h3> -->
          <div class="card">
  
<tr>
<th class="thcolor">Sr.No.</th>
<th class="thcolor">Complaint Type</th>
<th class="thcolor">Description</th>
<th class="thcolor">Complaint Date</th>
<th class="thcolor">Status</th>
<th class="thcolor">Resolved Date</th>

</tr>
@foreach($complaints as $c)
<tr>
<td>{{ $no++ }}</td>
<td>{{$c['complaint_type']}}</td>
<td>{{$c['description']}}</td>
<td>{{$c['complaint_date']}}</td>
<td>{{$c['status']}}</td>
<td>{{$c['resolved_date']}}</td>
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
