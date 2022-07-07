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
  <link rel="stylesheet" type="text/css" href="CSS\CustomerRegister.css" media="screen" />
</head>

<body style="background-color:white">
  <div class="bg-img"></div>
  <div class="bg-text">
    <div class="container">
      <form action="insert.php" method="POST" name="login">
        <div class="row">
          <b>
            <h2 style="text-align:center;font-size:40px;font-family: Titillium; margin:0px 10px">Registration</h2>
          </b>
          <p>Please fill this form to create an account.</p><br><br><br>
          <div class="vl">
            <span></span>
          </div>
          <div class="col">
            Name <input style="font-size:18px" type="text" name="username" required><br><br>
            Email Id <input style="font-size:18px" type="email" name="email" required><br><br>
            Contact No. <input style="font-size:18px" type="text" name="contact" required><br><br>
            Address<br><input style="font-size:18px" type="text" name="address" required><br><br>
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