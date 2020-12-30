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
    max-height:300px;
    max-width: 700px;
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
      <li class="nav-item active">
        <a class="nav-link"><b>Pay Maintenance</b></a>
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
  <b>Welcome {{__(Auth::user()->name)}}</b>
  </div>
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-7">
    <div class="card" style="height:26rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Pay Your Outstanding Bills</b></h5>
        <!-- table -->
        <table class="table table-responsive table-bordered table-striped" id="myTable">
        @foreach($allbills as $b)
        <tr><td colspan=6>My Co-op Housing Society</td></tr>

        <tr>
        <th>Bill No.</th>
        <td>000{{$b->id}}</td>
        <th>Bill Date</th>
        <td>{{date('d M,Y',strtotime($b->bill_date))}}</td>
<!--         <td>{{$b->bill_date}}</td>
 -->        <th>Name</th>
        <td>{{$b->Member_name}}</td>
        </tr>

        <tr>
        <th>Flat No.</th>
        <td>{{$flat_no}}</td>
        <th>Due Date</th>
        <td>{{date('d M,Y',strtotime($due_date))}}</td>
        <th>Period</th>
        <td> {{$b->bill_date}} to {{$end_date}}</td>
        </tr>

        <tr>
        <th>Sr. No</th>
        <th colspan=4>Description</th>
        <th>Amount</th>
        </tr>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>All Municipal Dues</td>
        <td>{{$b->All_Municipal_Dues}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Administration and General Expences</td>
        <td>{{$b->Administrative_and_General_Expenses}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Sinking Funds</td>
        <td>{{$b->sinking_fund}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Periodic Building Maintenance</td>
        <td>{{$b->Periodic_Building_Maintenance}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Common Area Utilization / Parking</td>
        <td>{{$b->Common_Area_Utilization_Parking}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Non Occupancy Charges / Miscellaneous</td>
        <td>{{$b->Non_Occupancy_Charges}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Past Arrears of Contribution</td>
        <td>{{$b->Past_Arrears_of_Contribution}}</td>
        </tr>

        <tr>
        <td>{{ $no++ }}</td>
        <td colspan=4>Interest Due</td>
        <td>{{$b->Interest_Due}}</td>
        </tr>
        
        <tr>
        <th colspan=5>Total Due</th>
        <td><b>{{$b->Total_Due}}</b></td>
        
        </tr>
        
        
        @endforeach
        
        </table>
        <a href="submit"> <button type="submit" class="btn btn-success">Pay Bill</button></a>

        </div>
        <!-- table -->
      
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
