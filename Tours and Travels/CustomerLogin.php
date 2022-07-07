<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Customer Login</title>
</head>


<style>
  body,
  html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  .bg-img {
    /* The image used */
    background-image: url("Customerlogin-bg.jpg");
    height: 730px;
    filter: blur(px);
    -webkit-filter: blur(px);
    width: 1535px;
    margin-top: 5px;
    min-height: 700px;
    background-position: bottom;
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
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 2px;
    position: absolute;
    top: 50%;
    right: 0%;
    transform: translate(-20%, -50%);
    z-index: 2;
    width: 33.3;
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
    background-color: transparent;
  }

  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 100;
    background: silver;
  }


  /* Add a background color when the inputs get focus */
  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit button */
  .btn {
    color: white;
    background-color: #0b495e;
    padding: 15px 25px;
    background-color: #0b495e;
    border: none;
    opacity: 1;
    cursor: pointer;
  }

  .btn:hover {
    background-color: green;
    opacity: 1;
  }


  .button {
    color: white;
    background-color: #1f618d;
    padding: 15px 25px;
    background-color: #0b495e;
    margin: 0px 50px;
    border: none;
    opacity: 1;
    cursor: pointer;
  }

  .button:hover {
    background-color: green;
    opacity: 1;
  }


  h1 {
    color: #fbfcfc;
  }

  h2 {
    color: white;
  }
</style>


<body style="background-color: #283747  ">



  <div class="bg-img"></div>



  <div class="bg-text">
    <br><br>

    <a class="button" href="Index.php"><b>Home</a>
    <a class="button" href="AdminLogin.php"><b>Admin</a>
    <br>

    <form method="POST" action="login.php" class="container">


      <center>


        <img src="Login.png" alt="Avatar" class="avatar" border="2px"><br><br>
        <h3><b>Customer name<br>
            <input style="font-size:18px;" type="text" name="name">
            <br>Password<br>
            <input style="font-size:18px" type="Password" name="password"></b>

          <br>
          <button style="font-size:20px" name="submit" type="submit" class="btn" value="login">
            <a class="btn" style="width:300px;color:white;">
              <b>Login</a>
          </button>
          <br><br>
          <h4>
            <p id="demo">New user?</p>
          </h4>

          <a class="btn" style="width:300px;padding: 15px 45px;color:white;background-color: #0b495e" href="CustomerRegister.php"><b>Sign Up</a></button>





        </h3>
      </center>
    </form>


  </div>



</body>

</html>