<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>




<!doctype html>
<html>
<head>
<title>Customer Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8mb4">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
  
}


.bg-img {
  background-image: url("Customer_register_bg.jpg");

filter: blur(px);
-webkit-filter: blur(px);
  
  min-height: 750px ;
  background-position:absolute;
  background-repeat: repeat;
  background-size: cover;
  position: relative;
  padding: 5px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 2px ;
  position: absolute;
  top: 50%;
  left: 35%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
height: 680px;
  padding: 30px;
  text-align: center;
}


/* style the container */
.container {
  position: center;right=0;
  border-radius: 20px;
  background-color: transparent;
  padding: 20px 0px 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;background-color: silver;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 400px;
}



/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: transparent;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}

.error{color: #FF0000;}

</style>


</head>


<body style="background-color:white">




<div class="bg-img"></div>
<div class="bg-text">
<div class="container">


<form action="insert.php" method="POST" name="login">
    <div class="row">
      <b><h2 style="text-align:center;font-size:40px;font-family: Titillium;">Registration</h2></b>
      <p>Please fill this form to create an account.</p>
      <div class="vl">

        <span></span>
     
      </div>

<div class="col">

Name <input style="font-size:18px" type="text" name="username" required><br><br>
Email Id  <input style="font-size:18px" type="email" name="email" required><br><br>
Contact No. <input style="font-size:18px" type="text" name="contact" required><br><br>
Address<br><input style="font-size:18px" type="text" name="address"required><br><br>
</div>

<div class="col">

<form class="container">

Set Password<br><input style="font-size:18px" type="password" name="password" required><br><br>
Confirm password<br><input style="font-size:18px" type="password" name="confirmpassword" required><br><br>

<button style="font-size:20px;color:white;background-color: #0b495e;" type="submit" name="create" class="btn"><b>Sign In</button>
</div>
<br><br>
<a class="btn" name="register" style="width:300px;color:white;background-color: #0b495e" href="CustomerLogin.php"><b>Click here to Login</a></button>
</h3> 
</div>
</body>
</html>