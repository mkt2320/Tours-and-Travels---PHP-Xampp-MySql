<?php
include("config.php");
error_reporting(0);
$_GET['id'];
$_GET['name'];
$_GET['place'];
$_GET['mot'];
?>

<html>

<head>
</head>

<style>
  body {
    font-family: Arial;
    margin: 0;
    background-color: whitesmoke;
  }


  .bg-img {
    /* The image used */
    background-image: url("s3.jpg");
    height: 780px;
    filter: blur(px);
    -webkit-filter: blur(px);
    width: 1536px;
    margin: 0px;
    height: 753px;
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
    left: 30%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 550px;
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
    background: Silver;
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



  .button {
    color: white;
    background-color: #0b495e;
    display: inline-block;
    padding: 13px 15px;
    border: none;
    width: 100%;
    opacity: 1;
    cursor: pointer;
  }

  .button:hover {
    background-color: green;
    opacity: 1;
  }

  h2 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;

  }
</style>





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