<?php
date_default_timezone_set("Asia/Kolkata");
$todays_date = date("Y-m-d");
$todays_time = date("H:i:s");
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
    }
    
}
</style>
	<title></title>
</head>
<body>

<!-- navbar -->
<div>
  <nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">Abhiruchi Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/visitors_record">See Visitiors List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="staffattendance">Staff Attendance Record</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="staff-amenities">Manage Amenities</a>
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
<br><br><br>



<div class="card-body card-color">
<div class="row">
	<div class="col-sm-12">
	<div class="card">


<div class="card-body shadow p-3  rounded">
      <a href="/watchman" class="btn btn-primary">Back</a>
        <h5 class="card-title" align="center">Staff Exit Form</h5>
        @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif





	<div class="container">

		<form action="demo" method="POST">
  @csrf


  <div class="form-group">
  	<select name="name" id="name" class="form-control chosen">

 @foreach($staff_attendances as $staff)
      <option>{{$staff['name']}}</option>
   @endforeach 
  </select>
 </div>



<div class="form-row"> 
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="date" id="visitorentry_date" value="<?php echo $todays_date;?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="exit_time" id="visitorentry_time" value="<?php echo $todays_time;?>" readonly>
    </div>
 
</div>


<button type="submit" class="btn btn-primary float-right">Create Entry</button>

 
 </div>
</div>
</form>
	</div>
   </div>
  </div>
  </div>
</body>
<script type="text/javascript">
	$(".chosen").chosen();
</script>
</html>