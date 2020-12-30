<?php

$date=date('y-m-d');
?>
<!DOCTYPE html>
<html>
<head>
<title>Disaply Secretory</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<h1>Display Secretory</h1>

<h4>Welcome {{Session::get('user')}}</h4>


<form method="POST" action="notice" >
@csrf

<div class="card">
<div class="card-body">
<div class="form-group">
    <label>Type Notice Here</label>
    <textarea name="notice" class="form-control" rows="10"></textarea>
  </div>

  <div class="form-group col-lg-6">
    <label>Date</label>
    <input type="text" value="<?php echo $date  ?>"  name="date" readonly class="form-control" placeholder="date">
  </div>


  <div class="form-group col-lg-6">
<button type="submit" class="btn btn-info">Submit</button>
</div>
</div>
  </div>
</form>


<br>
<br>
<h1>Display Notice</h1>


<div class="card">
<div class="card-body">
<table class="table-bordered col-lg-6">
<tr>
<th>Sr.No</th>
<th>Notice</th>
<th>Posted Date</th>
</tr>
<tbody>


@foreach($data as $i =>$key) 

<tr>
<!-- 	    @if(strtotime(date('y-m-d'))> strtotime($key->date))
 -->



<td>{{$i+1}}</td>

<td>{{$key->notice}}</td> 
<!-- <td>{{$key->notice}}</td> -->

<td>{{$key->date }}</td>
<!-- 	@endif -->
</tr>


@endforeach
</tbody>

</table>

</div>
</div>




</div>
</body>
</html>