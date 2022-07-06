<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Add Package</title>
</head>


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
  /* The image used */
  background-image: url("Addpackage-bg.jpg");height:780px;filter: blur(px);-webkit-filter: blur(px);
  width:1535px;
	height: 730px ;
	background-position: bottom ;
  background-repeat: repeat;
  background-size: cover;
  position: relative;
  padding: px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
}




.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 2px ;
  position: absolute;
  top: 53%;
  left: 20%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 500px;
height: 620px;
  padding: 30px;
  text-align: center;
}


/* Add styles to the form container */
.container {
	position: center;
	margin: 20px 00px 0px 20px;
	width: 300px;
	padding: 20px 0px 30px 60px;
	background-color:transparent ;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 100;
  background: Silver;
}


/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {

color: white;
  background-color: #0b495e;
  display:inline-block;
    padding: 15px 25px;
   
  border: none;
  width: 100%;
  opacity: 1;
  cursor: pointer;
}

.btn:hover {
  background-color: green ;
  opacity: 1;
}


.button {

color: white;
  background-color: 	
#0b495e;
  display:inline-block;
    padding: 13px 25px;
    
margin: 7px;  border: none;
  width: 100%;
  opacity: 1;
  cursor: pointer;
}

.button:hover {
  background-color: green ;
  opacity: 1;
}




h1{color:#fbfcfc;}
h2{color:white;}


</style>


<body style="background-color: #283747 ">




<div class="bg-img">
<br>
<br><a  class="button" style="padding: 13px 50px; margin-left: 58px;" href="Index.php" ><b>Home</a>
<a class="button" style="padding: 13px 35px" href="CustomerLogin.php" ><b>Customer</a>
<a  class="button" style="padding: 13px 34px;" href="Admin_Display.php" ><b>View Package</a>
</div>




<div class="bg-text">







<form action="Pinsert.php" method="post" enctype="multipart/form-data">



<center>



<h3>
<b>Package id <br><input style="font-size:18px" type="text"  name="id">
<br>Package name<br><input style="font-size:18px" type="text"  name="name"></b>
<br>Package price<br><input style="font-size:18px" type="text"  name="price"></b>
<br>Mode of transport<br><input style="font-size:18px" type="text"  name="mot"></b>


<br><b>Upload Package Images<br><input style="font-size:18px," type="file" name="uploadfile" value=""/>




<br><br><br>
<button style="font-size:20px" type="submit" name="add" class="btn"><b> Add </button>
<br>




</h3>
</center>
</form>


</div>



</body>
</html>

