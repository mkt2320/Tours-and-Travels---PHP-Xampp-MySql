<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Login</title>


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
  background-image: url("Admin_Login_bg.jpg");height:730px;filter: blur(px);-webkit-filter: blur(px);
  width:1535px;
	min-height: 750px ;
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

.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}


.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 2px ;
  position: absolute;
  top: 50%;
  right: 0%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 400.3px;
height: 700px;
  padding: 0px;
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
  border: 100px;
  background: smokewhite;
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
  background-color:#0b495e;
  display:inline-block;
    padding: 15px 40px;
    background-color: #0b495e;
  margin: 5px;
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
  background-color:#1f618d;
  display:inline-block;
    padding: 15px 30px;
    background-color: #0b495e;
margin: 27px;  border: none;
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


<body style="background-color: white  ">






<div class="bg-img"> </div>




<div class="bg-text">


<br><br>

<a class="button" style="padding: 15px 45px;" href="Index.php" ><b>Home</a>
<a class="button" href="CustomerLogin.php" ><b>Customer</a>

<br>
<form class="container"  action="login2.php" method="post">

<br>

<center>


<img src="Login.png" alt="Avatar" class="avatar"  border="2px"><br>
<br>
<h3><b>Login name<br>
<input style="font-size:18px" type="text"  name="name">

<br>Password<br>
<input style="font-size:18px" type="Password"  name="password"></b>

<br><br>


<br>


<button style="font-size:20px" type="submit" name="submit" value="login" class="btn"><b>Login</button>

<br>




</h3>
</center>
</form>


</div>



</body>
</html>