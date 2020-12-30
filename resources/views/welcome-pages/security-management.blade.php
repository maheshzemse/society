<!DOCTYPE html>
<html lang="en">
<head>

  <style>
    .serif {
  font-family: "Times New Roman", Times, serif;
}


/*body {
  background: black;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  height:100vh;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
*/
/*a {
  text-decoration: none;
}
*/

a#link {
  margin-top: 8px;
  color: white;
  text-decoration-color: white;
  font-weight: bold;

}

a#link:hover {
  color: #B01EFF;
}

.button {
  cursor: pointer;
  width: 250px;
  height: 40px;
  background: white;
  border-radius: 50px;
  background: linear-gradient(90deg, #fcff9e 0%, #c67700 100%);
  animation: gradient 2.5s infinite 0.8s cubic-bezier(0.2, 0.8, 0.2, 1.2) forwards;
  
  padding-top: 0px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;  
  font-size: 20px;
  text-decoration-color:white;
}

@keyframes gradient {
  0% { background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%) }
  10% { background: linear-gradient(90deg, #d53369 0%, #daae51 100%) }
  20% { background: linear-gradient(90deg, #FDBB2D 0%, #3A1C71 100%) }
  30% { background: linear-gradient(90deg, #FDBB2D 0%, #22C1C3 100%) }
  40% { background: linear-gradient(90deg, #f8ff00 0%, #3ad59f 100%) }
  50% { background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%) }
  60% { background: linear-gradient(90deg, #0700b8 0%, #00ff88 100%) }
  70% { background: linear-gradient(90deg, #3F2B96 0%, #A8C0FF 100%) }
  80% { background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%) }
  90% { background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%) }
  100% { background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%) }
}

  </style>
  <title>Security Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>


<!-- navbar -->
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">
    <img src="/images/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SOFTCARE
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li><a href=""><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Data Privacy & Protection</a>
        <ul class="dropdown">
        <li><a href="#">Data Protection with GDPR</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Data Privacy FAQs</a></li>
        </ul>
      </li>

      <li><a href=""><i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;Our Products</a>
        <ul class="dropdown">
        <li><a href="#">Security Management</a></li>
        <li><a href="#">Community Management</a></li>
        <li><a href="#">Financial Management</a></li>
        </ul>
      </li>

      <li><a href=""><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Complete Features List</a>
        <ul class="dropdown">
        
        <li><a href="#">Visitor Management</a></li>
        <li><a href="#">Daily Staff Management</a></li>
        <li><a href="#">Helpdesk / Safety management</a></li>
        <li><a href="#">Communication Management</a></li>
        <li><a href="#">Complaint management System</a></li>
        <li><a href="#">Amenities Management</a></li>
        <li><a href="#">Accounts and billing</a></li>
        <li><a href="#">Maintenance & utility bill payments</a></li>
        </ul>
      </li>

      <li><a href=""><i class="fa fa-building" aria-hidden="true">&nbsp;</i>About Company</a>
        <ul class="dropdown">
        
        <li><a href="#">About Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Refer a Society</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Why MySociety</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">FAQs</a></li>
        </ul>
      </li>
            
      <li><a href="#"><i class="fa fa-fw fa-user" aria-hidden="true"></i>Login</a>
        <ul class="dropdown">
          <li><a href="/login">User</a></li>
          <li><a href="/login/member">Staff</a></li>
          <li><a href="/login/admin">Admin</a></li>
        </ul>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto">
      <li>
        <a  href="tel:+91-8446915849"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;8446915849</a>
      </li>
   </ul>
  </div>
</nav>
<!-- navbar -->
  <br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
  <h1 class="font-weight-bold">Apartment security for the<br> modern community.</h1>
  <p class="serif">We ensures that only visitors, delivery executives and daily staff<br> approved by residents gain access to the premises, enhancing security <br>and unlocking a host of other benefits for the whole community.</p>
  <br>
  <h3 class="serif" style="color:#ff6666">Benefits of Security Management</h3>
  <p>&#10004;  Convenient verification of all visitors<br>&#10004;  End-to-end management of all daily staff<br>&#10004;  Smart workflows to manage deliveries.
<br><br>

<a target=”_blank” style="color:white" href="https://www.producthunt.com/posts/gradient-buttons-for-react-native"><div class="button" id="button">schedule demo
</div></a>
<a target=”_blank” id="link" href="https://www.producthunt.com/posts/gradient-buttons-for-react-native">Click Me!</a>
  </p>
</div>
<div class="col-md-6">
   <img src="images/1.png">
 </div>
</div>


<br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
   <img src="images/3.png">
</div>
<div class="col-md-6">
  <br><br><br>
   <h1 class="font-weight-bold" style="color:#ff6666">&nbsp;&nbsp;&nbsp;How it works</h1>
  <p class="serif">&nbsp;&nbsp;&nbsp;MyGate's Security Management module simplifies communication between residents and the main gate. It enables residents to notify guards that they are expecting a visitor or delivery and guards to seek the permission of a resident when someone comes unannounced. This seemingly simple connection can bring powerful change to any community.</p>
  <br>
  </p>
 </div>
</div>
<br><br>

<h1 class="font-weight-bold" align="center">Features of Security Management</h1>
<br>

<div class="container">
  <div class="row">

<div class="col-md-6">
  <br><br><br><br><br><br><br><br><br><br>
   <h3 class="font-weight-bold" style="color:#ff6666">&nbsp;&nbsp;&nbsp;Visitor Management</h3>
  <p>Ensure your guests always feel welcome.<br>
A long wait at the gate is frustrating for everyone involved—your guests, the guard and you. Now with a simple passcode, your guests can be at your door in minutes. No need for the register.</p>
<button type="button" class="btn btn-outline-danger">Know More</button>
  <br>
  </p>
 </div>
    <div class="col-md-6">
   <img src="images/12.png">
</div>


<div class="container">
  <div class="row">


    <div class="col-md-6">
      <br><br><br>
   <img src="images/51.png">
</div>

<div class="col-md-6">
  <br><br><br><br><br><br><br><br><br><br><br><br>
   <h3 class="font-weight-bold" style="color:#ff6666">&nbsp;&nbsp;&nbsp;Staff Management</h3>
  <p>No more anxiety about whether your maid has checked in!
Plan your day better with entry and exit notifications from MyGate. Learn exactly when your maid, cook or driver enters the community, pay their salaries and review their attendance on the app.

</p>
<button type="button" class="btn btn-outline-danger">Know More</button>
  <br>
  </p>
 </div>
</div>
<br>


<div class="container">
  <div class="row">

<div class="col-md-6">
  <br><br><br><br><br><br><br><br><br><br>
   <h3 class="font-weight-bold" style="color:#ff6666">&nbsp;&nbsp;&nbsp;
Delivery Management</h3>
  <p>All your packages delivered, whether or not you’re home
Get your deliveries sooner and without hassle. Not home? No problem. Simply instruct security to collect it for you via the app and pick it up at your convenience.</p>
<button type="button" class="btn btn-outline-danger">Know More</button>
  <br>
  </p>
 </div>
    <div class="col-md-6">
   <img src="images/17.png">
</div>
<br>


</body>
</html>