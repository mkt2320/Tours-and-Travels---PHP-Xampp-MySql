<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Customer Login</title>
  <link rel="stylesheet" type="text/css" href="CSS\CustomerLogin.css" media="screen" />
</head>


<body>
  <div class="bg-img"></div>
  <div class="bg-text"><br><br>
    <a class="button" href="Index.php"><b>Home</a>
    <a class="button" href="AdminLogin.php"><b>Admin</a><br>
    <form method="POST" action="login.php" class="container">
      <center>
        <img src="Login.png" alt="Avatar" class="avatar" border="2px"><br><br>
        <h3>
          <b>
            Customer name<br><input type="text" name="name"><br>
            Password<br><input type="Password" name="password"><br>
          </b>
          <button name="submit" type="submit" class="btn" value="login">
            <a class="btn" style="width:300px; color:white;">
              <b>Login
            </a>
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