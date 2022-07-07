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
  <link rel="stylesheet" type="text/css" href="CSS\AddPackage.css" media="screen" />
</head>

<body>
  <div class="bg-img"><br><br>
    <a class="button" style="padding: 13px 50px; margin-left: 58px;" href="Index.php"><b>Home</a>
    <a class="button" style="padding: 13px 35px" href="CustomerLogin.php"><b>Customer</a>
    <a class="button" style="padding: 13px 34px;" href="Admin_Display.php"><b>View Package</a>
  </div>

  <div class="bg-text">
    <form action="Pinsert.php" method="post" enctype="multipart/form-data">
      <center>
        <h3>

          Package id <br><input type="text" name="id">
          <br>Package name<br><input type="text" name="name">
          <br>Package price<br><input type="text" name="price"></b>
          <br>Mode of transport<br><input type="text" name="mot"></b>
          <br>Upload Package Images<br><input style="font-size:18px," type="file" name="uploadfile" value="" /><br><br><br>
          <button type="submit" name="add" class="btn"><b> Add </button><br>
        </h3>
      </center>
    </form>
  </div>
</body>

</html>