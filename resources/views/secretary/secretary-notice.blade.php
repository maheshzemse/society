<?php 
$todays_date=date("Y-m-d");
?>

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
      <li class="nav-item active">
        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="flat_management">Schedule Meetings</a>
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
     
      <li class="nav-item">
        <a class="nav-link" href="/Inventory">Member Objections</a>
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
      
   </div>
  <div class="card-body card-color">
    

  <div class="row">
  <div class="col-sm-6">
    <div class="card" style="height:30rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title">Secretary Notice</h5>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif  
        <!-- form -->
        <form action="secretary-notice" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <label for="notice_type"> Select Notice Type</label>
            <select class="form-control" name="notice_type">
              <option value="type 1">Type 1</option>
              <option value="type 2">Type 2</option>
              <option value="type other">Other</option>
            </select>          
          </div>
        </div><br>

      <div class="form-group">
      <label for="description">Type notice here ...</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
      </div>


        <div class="row">
          <div class="col-sm-6">
            <label for="notice_date">Notice Date</label>
            <input type="date" class="form-control" name="notice_date" value="<?php echo $todays_date;?>" readonly="" >
          </div><br>
          <div class="col-sm-6">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" class="form-control" name="expiry_date" >
          </div>
        </div><br>
         <button class="btn btn-primary" type="submit">Submit..</button>
    </form>

        <!-- form -->


      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="height:30rem;">
        <div class="card-body shadow p-3  rounded">
        
        <div style="overflow-x:auto;">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Vehicle No." title="Type Vehicle No. here">
        <table class="table table-bordered table-striped" id="myTable">
            <tr>
            <td>Sr. No</td>
            <td>Notice Type</td>
            <td>Description</td>
            <td>Date</td>
            <td>Expiry Date</td>
            </tr>
            @foreach($notice as $a)
            <tr>
            <td></td>
            <td>{{$a['notice_type']}}</td>
            <td>{{$a['description']}}</td>
            <td>{{$a['notice_date']}}</td>
            <td>{{$a['expiry_date']}}</td>
            
            
            <!-- <button type="button" class="btn btn-danger">Exit</button></a></td> -->
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