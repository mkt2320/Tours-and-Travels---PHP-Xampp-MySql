<?php
include("config.php");
error_reporting(0);
$_GET['id'];
$_GET['name'];
$_GET['place'];
$_GET['mot'];
?>

<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update</title>
  <link rel="stylesheet" type="text/css" href="CSS\update.css" media="screen" />
</head>





<body style="background-color: whitesmoke ">






  <div class="bg-img">

    <div class="bg-text">

      <form action="Admin_Display.php" method="GET">

        <h2>UPDATE PACKAGE DETAILS</h2><br><br>

        Package id <input type="" name="id" style="border: 0px;height:40px;cursor:not-allowed;text-align: center;background-color: #2b2d42;font-weight: bold;font-size: 20px;color: white;margin-left: 10px;" value="<?php echo $_GET['id']; ?>" /><br><br><br><br><br>
        <b>Package name <input type="text" name="name" style="border-radius: 40px;text-align: center;background-color: silver;font-weight: bold;font-size: 20px;" value="<?php echo $_GET['name']; ?>" /><br><br>

          Package price <input type="text" name="price" style="border-radius: 40px;text-align: center;background-color: silver;font-weight: bold;font-size: 20px;" value="<?php echo $_GET['place']; ?>" /><br><br>

          Mode OF Transport <input type="text" name="mot" style="border-radius: 40px;text-align: center;background-color: silver;font-weight: bold;font-size: 20px;" value="<?php echo $_GET['mot']; ?>" /><br><br>

          <input type="submit" name="Submit" value="update" style="font-size:15px;border-radius: 10px;text-align: center;background-color:#0b495e;color:white;padding: 12px 50px;font-weight: bold;font-size: 20px;  width: 100%;opacity: 1;cursor: pointer;" />



        </b>
      </form>

    </div>
  </div>

</body>

</html>