<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 bg-dark">
  <a class="navbar-brand" href="index.php">Alphabet.io</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  ml-auto custom-nav  ">
      <li class="nav-item   custom-nav-item ">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light" href="card.php">Courses</a>
      </li>
      <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light" href="payment.php">Payment</a>
      </li>
      <?php
      session_start();
      if(isset($_SESSION['is_login'])){
        echo '<li class="nav-item  custom-nav-item">
        <a class="nav-link text-light " href="#">My Profile</a>
      </li>
      <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light" href="logout.php">Log out</a>
      </li>';
      
      }
      else{
        echo ' <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light  "data-toggle="modal" data-target="#StuLogModalCenter" href="#">Login</a>
      </li>
      <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light "data-toggle="modal" data-target="#StuRegModalCenter" href="#">Sign up</a>
      </li>';
      }
      ?>
      
     
      <li class="nav-item  custom-nav-item">
        <a class="nav-link text-light " href="#">Feedback</a>
      </li>
      <li class="nav-item   custom-nav-item">
        <a class="nav-link text-light" href="#">Contact</a>
      </li>

    </ul>
  </div>
</nav>
<div class="container-fluid-sm video-1">
  <div class="video-2">
    <video playsinline autoplay muted loop ><source src="video/Macbook.mp4">
</video>
<div class="vid-overlay">

</div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome to Alphabet.io</h1>
    <small class="my-content go ">Learn and Implement</small><br><br>
    <?php
    
    if(!isset($_SESSION['is_login'])){
      echo '<a  href="#" class="btn btn-danger mt-3"data-toggle="modal" data-target="#StuRegModalCenter">Get Started</a>';
    }
    else{
      echo ' <a class="btn btn-primary mt-3" href="#">My Profile</a>';
    }
    
    
    ?>
    
    
  </div>

</div>
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner" >
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr3"></i>50+ Online Courses</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-users mr3"></i>Expert Instructors</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-keyboard mr3"></i>Lifetime Access</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-rupee-sign mr3"></i>Money Back Guarantee</h5>
    </div>
  </div>
</div>


<!-- card -->

<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>

  <div class="card-deck mt-4 ">
    <a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
  <div class="card ">
    <img src="Images/c++.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title ">Learn C++</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
  </a>
  <a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
  <div class="card">
    <img src="Images/c++.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title ">Learn C++</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
  </a>
  <a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
  <div class="card">
    <img src="Images/c++.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title ">Learn C++</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
  </a>
  
  
  </div>
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
  <div class="card">
    <img src="Images/python.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
    </a>
    <a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
  <div class="card">
    <img src="Images/python.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
    </a>
    <a href="" class="btn" style="text-align:left;padding:0px;margin:0px;">
  <div class="card">
    <img src="Images/python.png" class="card-img-top" alt="Course not found"/>
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small>
    <span class="font-weight-bolder">&#8377 200</span></p><a  class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
  </div>
    </a>
  </div>
  <div class="text-center m-2">
    <a href="#" class="btn btn-danger btn-sm">View All Courses</a>
  </div>
</div>

<!--  -->

<!-- contact -->
<?php
include('./contact.php');
?>
<!-- contact-end -->

<!-- Feedback -->
<?php
include('./Feedback.php')
?>
<!--  -->

<div class="container-fluid bg-danger text-white ">
  <div class="row  text-white text-center p-1" >
    <div class="col-sm">
      <a class="social-hover"><i class="fab fa-facebook "></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover"><i class="fab fa-whatsapp "></i>Whatsapp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover"><i class="fab fa-twitter "></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover"><i class="fab fa-instagram "></i>Instagram</a>
    </div>
  </div>
</div>
<!-- Footer -->
<?php
include('./footer.php')
?>
<!--  -->
<?php

include('./end.php')
?>
<!-- Button trigger modal -->


<!-- Modal -->
<!-- sign up -->
<div class="modal fade" id="StuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="StuRegModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuRegModalCenter">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="stuRegForm">
  <div class="form-group">
    <i class="fas fa-users"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
  <small id="stumsg1"></small><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
 <i class="fas fa-envelope"></i> <label for="stumail" class="pl-2 font-weight-bold">Email address</label>
   <small id="stumsg2"></small> <input type="email" class="form-control" id="stuemail" name="stumail" placeholder=" Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>
    <small id="stumsg3"></small><label for="stupass"class="pl-2 font-weight-bold">New Password</label>
    <input type="password" class="form-control"name="stupass" id="stupass" placeholder="Password">
  </div>
  
  
</form>
      </div>
      <div class="modal-footer">
        <span id="sucessmsg"></span>
        <button type="button" class="btn btn-primary" id="signup12" onclick="addstu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!--  -->
<!-- login -->
<div class="modal fade" id="StuLogModalCenter" tabindex="-1" role="dialog" aria-labelledby="StuLogModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuLogModalCenter">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="adminLoginForm">
  <div class="form-group">
   
 <i class="fas fa-envelope"></i> <label for="logmail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="logemail" name="logemail" placeholder=" Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>
    <label for="logpass"class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control"name="logpass" id="logpass" placeholder="Password">
  </div>
  
  
</form id="studLoginForm">
      </div>
      <div class="modal-footer">
      <small id="login1"></small>
        <button type="button" onclick="stuLogin()" class="btn btn-primary"id="stuLogin">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cancelstu()">Cancel</button>
      </div>
    </div>
  </div>
</div> 
<!--  -->
<!-- admin login -->
<div class="modal fade" id="adminLogModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLogModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLogModalCenter"> AdminLogin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="" method="POST">
  <div class="form-group">
   
 <i class="fas fa-envelope"></i> <label for="adminlogmail" class="pl-2 font-weight-bold">Email address</label>
   <input type="email" class="form-control" id="adminlogemail" name="adminlogmail" placeholder=" Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>

    <label for="logpass"class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control"name="adminlogpass" id="adminlogpass" placeholder="Password">
  </div>
  
  
</form>
      </div>
      <div class="modal-footer">
      <small id="logadmin"></small>
        <button type="button" class="btn btn-primary"id="adminLogin" onclick="admin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> 

<!--  -->

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminajax.js"></script>
  <script src="js/proper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/go.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>