<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="CSS\AdminLogin.css" media="screen" />
</head>

<body>
  <div class="bg-img"></div>
  <div class="bg-text"><br><br>
    <a class="button" style="padding: 15px 45px;" href="Index.php"><b>Home</a>
    <a class="button" href="CustomerLogin.php"><b>Customer</a><br>
    <form class="container" action="login2.php" method="post"><br>
      <center>
        <img src="Login.png" alt="Avatar" class="avatar" border="2px"><br><br>
        <h3>
          <b>Username<br><input type="text" name="name">
            <br>Password<br><input type="Password" name="password"></b><br><br><br>
          <button type="submit" name="submit" value="login" class="btn"><b>Login</button><br>
        </h3>
      </center>
    </form>
  </div>
</body>

</html>