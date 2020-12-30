<?php
$todays_date=date("Y-m-d");


?>

@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Management</title>
      <!-- add icon link -->
      <link rel = "icon" src ="images/logo.png" type = "image/x-icon"> 

    <style>
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
  }
  .thcolor{
    background-color: #0f1442;
    color:white;
  }
  .table-responsive{
    max-height:300px;
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
        <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Manage Flats</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Accounts</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/admin-maintenance"><b>Maintenance & Utility Bills</b></a>
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
  <img src="/images/softcare.png" alt="">
  <a href="allbills_admin"><button class="btn btn-success float-right">View All Bills</button></a>
  
  </div>
   
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-12">
    <div class="card" style="height:28rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Set the Values for Maintenance</b></h5>
        <!-- form -->
        
        <form action="admin-maintenance" method="POST">
        @csrf

           <div class="row">
          <div class="form-group col-lg-8 ">
            <label for="exampleFormControlSelect1">Select Members</label>
              <select required="" class="form-control" name="Member_name">
                <option value="" >Select</option>
                @foreach( $data as $d)
            
                <option  value="{{$d->name}}">{{$d->name}}</option>


                @endforeach

              </select>
          </div>
        </div>







          <div class="row">
            <div class="col">
            <label for="formGroupExampleInput">All Municipal Dues</label>
              <input type="text" class="form-control" placeholder="All Municipal Dues" name="All_Municipal_Dues" value="0" id="All_Municipal_Dues" onkeyup="sum()" >
            </div>
            <div class="col">
            <label for="formGroupExampleInput">Administrative and General Expenses</label>
              <input type="text" class="form-control" placeholder="Administrative and General Expenses" name="Administrative_and_General_Expenses" value="0" id="Administrative_and_General_Expenses" onkeyup="sum()" >
            </div>
            <div class="col">
            <label for="formGroupExampleInput">Sinking Fund</label>
              <input type="text" class="form-control" placeholder="Sinking Fund" name="sinking_fund" id="sinking_fund" value="0" onkeyup="sum()">
            </div>
          </div>
          <br>
          <div class="row">
            
            <div class="col">
            <label for="formGroupExampleInput">Periodic Building Maintenance</label>
              <input type="text" class="form-control" placeholder="Periodic Building Maintenance" name="Periodic_Building_Maintenance" id="Periodic_Building_Maintenance" value="1000" readonly="" onkeyup="sum()">
            </div>
            <div class="col">
            <label for="formGroupExampleInput">Common Area Utilization/Parking</label>
              <input type="text" class="form-control" placeholder="Common Area Utilization/Parking" name="Common_Area_Utilization_Parking" value="" required=""  id="Common_Area_Utilization_Parking" onkeyup=" sum()">
            </div>
            <div class="col">
            <label for="formGroupExampleInput">Non Occupancy Charges/Miscellaneous</label>
              <input type="text" class="form-control" placeholder="Non Occupancy Charges/Miscellaneous" name="Non_Occupancy_Charges" value="0" id="Non_Occupancy_Charges" onkeyup="sum()">
            </div>
          </div>
        <br>
          <div class="row">
            <div class="col-sm-4">
            <label for="formGroupExampleInput">Past Arrears of Contribution</label>
              <input type="text" class="form-control" placeholder="Past Arrears of Contribution" name="Past_Arrears_of_Contribution" value="0" id="Past_Arrears_of_Contribution" onkeyup="sum()">
            </div>
            <div class="col-sm-4">
            <label for="formGroupExampleInput">Interest Due</label>
              <input type="text" class="form-control" placeholder="Interest Due" name="Interest_Due" id="Interest_Due" value="0" onkeyup="sum()">
            </div>

            <div class="col-sm-4">
            <label for="formGroupExampleInput">Total Due</label>
              <input type="text" id="Total_Due" class="form-control" name="Total_Due" id="Total_Due">
            </div>


             <div class="col-sm-4">
<!--             <label for="formGroupExampleInput">Date</label>
 -->              <input type="hidden" id="Total_Due" class="form-control" name="bill_date" value=" <?php  echo $todays_date; ?>" >
            </div>


          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <!-- form -->
      </div>
    </div>
  </div>
  <!-- <div class="col-sm-6">
  hello
  </div> -->
</div>
  
 
  
  </div>
</div>



@endsection


</body>
</html>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('All_Municipal_Dues').value;
            var txtSecondNo = document.getElementById('Administrative_and_General_Expenses').value;
            var txtThirdNo = document.getElementById('sinking_fund').value;
            var txtForthNo = document.getElementById('Periodic_Building_Maintenance').value;
            var txtFifthNo = document.getElementById('Common_Area_Utilization_Parking').value;
            var txtSixthNo = document.getElementById('Non_Occupancy_Charges').value;
            var txtSeventhNo = document.getElementById('Past_Arrears_of_Contribution').value;
            var txtEighthNo = document.getElementById('Interest_Due').value;
            


 
            var result = parseInt(txtFirstNo) + parseInt(txtSecondNo) + parseInt(txtThirdNo) + parseInt(txtForthNo) + parseInt(txtFifthNo) 
            + parseInt(txtSixthNo) + parseInt(txtSeventhNo) + parseInt(txtEighthNo);
            if (!isNaN(result)) {
                document.getElementById('Total_Due').value = result;
            }
        }
</script>



<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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