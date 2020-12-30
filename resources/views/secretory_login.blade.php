<!DOCTYPE html>
<html>
<head>
<title>Secretory login</title>
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
<h1 class="text-info">Secretory login</h1>

<form method="POST" action="secretory_login" >
@csrf

<div class="form-group col-lg-6">
    <label>Mobile</label>
    <input type="number" name="mobile" class="form-control" placeholder="mobile">
  </div>

  <div class="form-group col-lg-6">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>

    <div class="form-group col-lg-6">
<button type="submit" class="btn btn-info">Login</button>
</div>
</body>
</html>