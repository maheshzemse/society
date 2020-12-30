<!DOCTYPE html>
<html lang="en">
<head>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .serif {
  font-family: "Times New Roman", Times, serif;
}


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
  <title>Community Management</title>
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
  <h1 class="font-weight-bold">Make your community smart, efficient, paperless.</h1>
  <p class="serif">Thousands of societies are now on MyGate ERP, managing over ₹85 Crore of payments every month. Our ERP module helps communities run seamlessly. It automates a number of manual processes to simplify the work of management committee members and enable them to build a better community experience for their residents.
</p>

  <br>
  
  <h3 class="serif">Benefits of Community Management</h3>
  <p>&#10004;   Manage accounts on a single dashboard.
    
  <br>&#10004;  Get real-time updates on support tickets.<br>&#10004;  Keep the community on the same page.
<br><br>

<a target=”_blank” style="color:white" href="https://www.producthunt.com/posts/gradient-buttons-for-react-native"><div class="button" id="button">schedule demo
</div></a>
<a target=”_blank” id="link" href="https://www.producthunt.com/posts/gradient-buttons-for-react-native">Click Me!</a>
  </p>
</div>
<div class="col-md-6">
   <img src="images/CC.png">
 </div>
</div>


<br><br>


<h1 class="font-weight-bold" align="center">Features of Community Management</h1>
<br><br>

<div class="container" style="align">
  <div class="row">

<div class="col-md-6">
  <br><br><br><br><br>
   <h3 class="font-weight-bold">&nbsp;&nbsp;&nbsp;Accounts & Payments</h3>
  <p>Money management made easy<br>
We understand how time-consuming money management can be at gated communities. That’s why we’ve simplified it, with a complete accounting toolkit for the committee and one-click payment for residents.</p>
<button type="button" class="btn btn-outline-danger" style="border-color: red">Know More</button>
  <br>
  </p>
 </div>
    <div class="col-md-6">
   <img src="images/CCCC.png">
</div>
</div>
<br><br>


<div class="row">
<div class="col-md-6">
   <img src="images/C.PNG" width="450" height="450">
</div>
<div class="col-md-6">
  
  <br><br><br><br><br><br><br><br><br>
   <h3 class="font-weight-bold">&nbsp;&nbsp;&nbsp;Helpdesk</h3>
  <p>Solve problems on-the-go!
<br>
Community issues need quick resolution. MyGate makes it easy to manage and assign complaints and provides residents with real-time updates so they can stay on top of the matter from anywhere</p>
<button type="button" class="btn btn-outline-danger" style="border-color: red">Know More</button>
  <br>
  </p>
 </div>
 
    
</div>
<br><br>

<div class="row">

    
<div class="col-md-6">
  <br><br><br><br><br><br><br><br>
   <h3 class="font-weight-bold">&nbsp;&nbsp;&nbsp;Amenities’ Booking</h3>
  <p>For a safer, better managed clubhouse
<br>
Do you know who is using the facilities within your community? Does the community wish to set time limits on usage of certain amenities? MyGate can make it happen.</p>
<button type="button" class="btn btn-outline-danger" style="border-color: red">Know More</button>
  <br>
  </p>
 </div>
 <div class="col-md-6">
   <img src="images/CCCCC.png" width="550" height="450">
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-6">
   <img src="images/CCC.png" >
</div>
<div class="col-md-6">
  
 <br><br> 
   <h3 class="font-weight-bold">&nbsp;&nbsp;&nbsp;Communication Management</h3>
  <p>Build engagement the easy way!
<br>
MyGate streamlines the flow of all information within the community, with features to manage official communication, feedback, discussions and even recent events</p>
<button type="button" class="btn btn-outline-danger" style="border-color: red">Know More</button>
  <br>
  </p>
 </div>
 
    
</div>
<br><br>

</body>
</html>
