<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Society App</title>
        
        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- add icon link -->
        <link rel = "icon" href =  "/images/logo2.png" type = "image/x-icon">
        <!-- Styles -->
        <style>
         /* normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}} */
          
            
        </style>
<style>
    html {
  scroll-behavior: smooth;
}
    #section2 {
  height: 450px;
  background-color: yellow;
}
#lastdiv{
    background-color:#53565A;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
        
    </head>
    <body class="antialiased">
            
            
               
                <!-- navbar -->
                <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
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
        <li><a href="security-management">Security Management</a></li>
        <li><a href="financial-management">Community Management</a></li>
        <li><a href="community-management">Financial Management</a></li>
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

      <li class="nav-item active">
        <a class="nav-link" href="/loginpage">Login to System</a>
      </li>   

      <!-- <li><a href="#"><i class="fa fa-fw fa-user" aria-hidden="true"></i>Login</a>
                  <ul class="dropdown">
                  <li><a href="/login">Member</a></li>
                  <li><a href="/login/watchman">Security</a></li>
                  <li><a href="/login/admin">Admin</a></li>
                  </ul>
                </li> -->
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/login">User</a>
          <a class="dropdown-item" href="/login/member">Staff</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/login/admin">Admin</a>
        </div>
      </li> -->
      
    </ul>
    <ul class="navbar-nav ml-auto">
    <li>
        <!-- <a  href="tel:+91-8446915849"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;8446915849</a> -->
        <button type="button" class="btn btn-warning"data-toggle="modal" data-target="#exampleModal">Super Admin Login
        </button>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

      <form method="POST"action="superhome" >
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    </li>
</ul>
   
    
  </div>
</nav>
                <!-- navbar -->
                
                
<br><br>
<div class="container">
  <div class="align-items-center row">
    <div class="col-sm">
        <div class="conntainer ml-10"> 
            <br>
            <div class="typewriter"> 
            <h1 class="font-weight-bold"><center>SOFTCARE SOCIETY</center></h1>
            <hr>
            </div> 
            <br>       
            <h1 class="font-weight-bold">Housing Societies now uses our app to manage their... </h1>
            <h4 class="font-weight-bold">
              
                Accounts, Complaints & Visitors
            
            </h4>

            
            <!-- <a class="typewriter" data-period="2000" data-type="[&quot;visitors&quot;,&quot;deliveries&quot;,&quot;staff &quot;,&quot;accounts&quot;,&quot;complaints&quot;]"><span classname="wrap">deliveries</span></a> -->
            
            
            
            
            
            
            
            <div class="btn-group-vertical">
                <a href="#section2"><button type="button" class="buttoncolor" style="margin:5px; width:210px" class="btn btn-primary ">SCHEDULE A DEMO</button></a>
                <a href="https://api.whatsapp.com/message/7TBU4MDUDWU4F1"><button type="button" style="margin:5px; width:210px" class="btn btn-secondary ">Get Details on Whatsapp</button></a>
            </div>
        </div>
    </div>
    <div class="col-sm">
        
      <img src="/images/welcome/main.png" alt="" width="640px;">
    </div>
  </div>
  
  <hr>
  <div class="container">
<center>At TechnoKraft, we help our clients maintain visitors, communities, and the financial management system. Our goal is to make customer’s life more convenient and secure for residents in any housing community.</center>
</div>
<hr>
</div>

<div class="container">
<h1  class="font-weight-bold"><center>TECHNOKRAFT SOCIETY is offering Free Visitor Management Software
and Financial module for your society. Limited offer*</center></h1>
</div>


<!-- below cards -->
<center>Secure & Seamless Visitor Entry<center>

<div class="card">
  
  <div class="card-body">
  <center>  
  <div class="containercss">
        <div class="cardcss">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                    <!-- <img src="images/welcome/11.jpg"> -->
                    <h3>Security Management</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Security Management describes the set of policies and procedural controls that organizations implement to secure their informational assets.</p>
                        <a href="security-management">Read More</a>
                </div>
            </div>
        </div>
        <div class="cardcss">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                    <h3>Community Management</h3>
                    <!-- <img src="images/welcome/12.jpg">
                    <h3>Visitor Management</h3> -->
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Community Management ensures Support towards members to have a  lookout  to their issues and bestow them with solutions. This includes Chat forums,Complaint & Amenities. </p>
                        <a href="community-management">Read More</a>
                </div>
            </div>
        </div>
        <div class="cardcss">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                    <h3>Financial Management</h3>
                    <!-- <img src="images/welcome/fin.png"> -->
                    
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Financial management refers to the strategic planning, organising and controlling of financial undertakings in an organisation, Deals with Accounts/Bills, & Maintenance.</p>
                        <a href="financial-management">Read More</a>
                </div>
            </div>
        </div>
</center>    
    </div>
    <hr> 

<!-- section wala div open -->
<div class="main" id="section2" style="background-color:#F4F2E6">
  <br><br>
    <h2>Schedule a Demo</h2>
    <br>
  <div class="align-items-center ml-auto mr-auto col-lg-9">
    <form action="welcome" method="POST">
    @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="mt-3 mt-3 form-group">
                <input id="name" type="text" class="form-control" placeholder="Your name" name="name">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mt-3 mt-3 form-group">
                    <!-- <input type="text" class="form-control" placeholder="Your Role"> -->
                    <select id="role" class="form-control"  placeholder="Your Role" name="role">
                    
                    <option value="Committee Member">Committee Member</option>
                    <option value="Resident">Resident</option>
                    <option value="Security">Security Agency</option>
                    <option value="Builder">Builder</option>
                    <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div class="mt-3 mt-3 form-group">
                    <input type="text"id="email" class="form-control" placeholder="Email ID" name="email">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"">
                <div class="mt-3 mt-3 form-group">
                    <input type="text" id="phone" class="form-control" placeholder="Phone No." name="phone">
                </div>
            </div>
        </div>    
        <div class="d-flex-justify-content-center">
            <div class="col-lg-6">
                <div class="mt-3  ">
                    <!-- <input type="text" class="form-control" placeholder="Your City"> -->

                    <select id="location" class="form-control"  placeholder="Your City" name="location">
                    <option value="Bangalore ">Bangalore</option>
                    <option value=" Mumbai">Mumbai</option>
                    <option value="Delhi-NCR ">Delhi-NCR</option>
                    <option value="Chennai ">Chennai</option>
                    <option value=" Hyderabad">Hyderabad</option>
                    <option value="Kolkata ">Kolkata</option>
                    <option value=" Kochi">Kochi</option>
                    <option value=" Pune">Pune</option>
                    <option value="Ahmedabad ">Ahmedabad</option>
                    <option value="Chandigarh ">Chandigarh</option>
                    <option value="Jaipur ">Jaipur</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Surat ">Surat</option>
                    <option value=" Raipur">Raipur</option>
                    <option value=" Others">Others</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex-justify-content-center">
            <div class="col-lg-6">
                <div class="mt-3  ">
                <button type="submit" class="buttoncolor" style="margin:5px; width:210px" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
  </div>
</div>
<!-- section wala div close -->

<!-- last div -->
<div class="main" id="section2" style="background-color:#53565A;height: 250px; ">
   
<table class="table" style="color:#D0D0D0; margin-top: 0px;">
<tr>
<td>
  <pre style="color:#D0D0D0; font-family:'Comic Sans Ms';">
        Features
        <a href="#">Visitor Management</a>
        <a href="#">Daily Staff & Service</a>
        <a href="#">Child Security</a>
        <a href="#">Delivery Management</a>
        <a href="#">Accounts and Payments</a>
  </td>
<td>
  <pre style="color:#D0D0D0; font-family:'Comic Sans Ms';">
    <a href="#">Amenities' Booking</a>
    <a href="#">Multi-Property Management</a>
    <a href="#">Communication Management</a>
    <a href="#">Helpdesk</a>
  </td>

<td>
<pre style="color:#D0D0D0; font-family:'Comic Sans Ms';">
    Company
    <a href="#">About us</a>
    <a href="#">Careers</a>
    <a href="#">Contact us</a>
    <a href="#">Terms & conditions</a>
    <a href="#">Responsible Disclosure</a>
    <a href="#">Data Privacy</a>
  </td>

<td>
  <pre style="color:#D0D0D0; font-family:'Comic Sans Ms';">
  <a href="#">Why MySociety</a>
  <a href="#">FAQs</a>
  <a href="#">Blog</a>
</td>

<td>
    <pre style="color:#D0D0D0; font-family:'Comic Sans Ms';">
    Contact
    Centre -PANVEL,
    Shop NO.-A224,225,226,227,
    Sai Arcade,above G.P.Parsik Bank
    Behind Life Line Hospital,
    Opp. S.T.Depot Panvel,Raigad,
    Panvel-410 206,Maharashtra
    Tel: 8446915849
    Website: <a href="#">www.icajobgaruntee.com</a>
  </pre>
</td>
</tr>
</table>
</div>
<!-- last div -->


    </div>
</div>









