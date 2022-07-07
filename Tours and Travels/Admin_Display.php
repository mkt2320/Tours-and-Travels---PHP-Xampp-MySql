<?php
include("config.php");
?>


<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>View Packages</title>
  <link rel="stylesheet" type="text/css" href="CSS\Admin_Display.css" media="screen" />
</head>


<body>

  <div class="bg-img">
    <a class="button" href="search.php"><b>Search</a><br><br>
    <a class="btn" href="index.php"><b>Logout</a></button>


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
      <h1>Packages</h1>
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
          echo "
              <tr >
                <td style='padding:0px;'><img src= ' " . $result['image'] . " 'height='300' width='500' align='center' />   </td>
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