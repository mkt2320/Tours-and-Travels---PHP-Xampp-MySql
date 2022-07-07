<?php

include("config.php");
?>


<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>View Packages</title>
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
    background-image: url("tablebg.jpg");
    height: 730px;
    filter: blur(px);
    -webkit-filter: blur(px);
    width: 1519px;
    margin: 0px;
    height: auto;
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


  .button {

    color: white;
    background-color: #2b2d42;
    display: inline-block;
    position: absolute;
    top: 0%;
    left: 10%;
    border: none;
    width: 100%;
    opacity: 1;
    cursor: pointer;
    margin: 35px;
    border: none;
    width: 100%;
    opacity: 1;
    cursor: pointer;
  }


  .btn {

    color: white;
    background-color: #2b2d42;
    display: inline-block;


    position: absolute;
    top: 4.55%;
    right: 15%;
    border: none;
    width: 100%;
    opacity: 1;
    cursor: pointer;
  }

  table,
  td,
  th {
    border-bottom: 2px solid grey;
    text-align: left;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:nth-child(odd) {
    background-color: #F2DBDE;
  }

  table {
    background-color: #F2DBDE;
    border-collapse: collapse;
  }

  th {
    background-color: #2b2d42;
    padding: 15px;
    text-align: center;
    
  }

  td {
    font-size: 25px;
    text-align: center;
  }

  h1 {
    font-size: 80px;
    color: #fff;
    text-align: center;
    text-shadow: 0 0 1px #fff, 0 0 10px #fff, 0 0 1px #0073e6, 0 0 10px #0073e6, 0 0 10px #0073e6, 0 0 10px #0073e6, 0 0 20px #0073e6;

  }
</style>





<body style="background-color:  whitesmoke">

  <div class="bg-img">


    <a class="button" style="width:150px;padding: 15px 20px;margin: 50px;text-align: center;" href="search.php"><b>Search</a>
    <br><br>


    <a class="btn" style="width:150px;padding: 15px 20px;color:white;text-align: center;" href="index.php"><b>Logout</a></button>


    <?php
    if (isset($_GET['Submit'])) {
      $packageid = $_GET['id'];
      $packagename = $_GET['name'];
      $packageprice = $_GET['price'];
      $Modeoftransport = $_GET['mot'];
      $query = "UPDATE package set  package_name='$packagename' , package_price='$packageprice' , mode_of_transport='$Modeoftransport' WHERE package_id='$packageid '";
      $data = mysqli_query($con, $query);

      if ($data) {
        echo "<a href = 'Admin_Display.php' onclick=' return checkupdate()'>";
      } else {
        echo "<font color ='red'>Record Not Updated.<a href = 'Admin_Display.php'>";
      }
    } else {
    }
    ?>


    <center>
      <h1 style="font-size: 80px;">Packages</h1>
    </center>

    <h2>




      <?php
      include("config.php");
      error_reporting(0);
      $query = "select * FROM package";
      $data = mysqli_query($con, $query);
      $total = mysqli_num_rows($data);

      if ($total != 0) {
      ?>

        <table text-color="white" border="1px" align="center" width="90%" text-align="center" ; }>
          <tr>
            <th style="color: white;font-size: 30px;font-family: cursive;">Image</th>
            <th style="color: white;font-size: 30px;font-family: cursive;">Package ID</th>
            <th style="color: white;font-size: 30px;font-family: cursive;">Package Name</th>
            <th style="color: white;font-size: 30px;font-family: cursive;">Package Price</th>
            <th style="color: white;font-size: 30px;font-family: cursive;">Mode of Transport</th>
            <th style="color: white;font-size: 30px;font-family: cursive;" colspan="2">Operations</th>

          </tr>
        <?php



        while ($result = mysqli_fetch_assoc($data)) {

          echo "<tr >
          <td style='padding:0px;'><img src= ' ".$result['image']." 'height='300' width='500' align='center' />   </td>
          <td style='padding:5px;'>" . $result['package_id'] . "</td>
    	        <td style=' padding:5px;'>" . $result['package_name'] . "</td>
    	        <td style=' padding:5px;'>" . $result['package_price'] . "</td>
    	        <td style=' padding:5px;'>" . $result['mode_of_transport'] . "</td>

              <td><a href ='update.php?id=$result[package_id] &name=$result[package_name]&place=$result[package_price]&mot=$result[mode_of_transport]'>UPDATE</a></td>

              <td><a href ='delete.php?id=$result[package_id]' onclick=' return checkdelete()'> Delete<a></td>
              

          </tr>";
        }
      } else {
        echo "NO RECORD FOUND";
      }


        ?>
        </table>

        <br><br><br><br><br>

  </div>


  <script>
    function checkdelete() {
      return confirm('Are you sure you want to delete this data??');
    }
  </script>

  <script>
    function checkupdate() {
      return confirm('Record Updated Successfully!!');
    }
  </script>




</body>

</HTML>