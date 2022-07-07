<?php
include("config.php");
?>

<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Search</title>
  <link rel="stylesheet" type="text/css" href="CSS\serchC.css" media="screen" />
</head>

<body>
  <div class="bg-img">
    <h1>Search by package name</h1>
    <form action="" method="POST">
      <input type="text" name="name" style="font-weight: bold;font-size: 15px;" placeholder="Enter package name to search"><br>
      <button style="font-size:20px" type="submit" name="search" class="button"><b> Search data
      </button>
      <br>
    </form>

    <?php
    error_reporting(0);
    if (isset($_POST['search'])) {
      $name = $_POST['name'];
      $query = "SELECT * FROM package where package_name='$name' ";
      $query_run = mysqli_query($con, $query);

      while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <form action="" method="POST">
          <input type="text" name="package_id" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['package_id'] ?>" /><br>
          <input type="text" name="package_price" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['package_price'] ?>" /><br>
          <input type="text" name="mode_of_transport" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['mode_of_transport'] ?>" /><br>
        </form>
    <?php
      }
    }
    ?>
    <br><br>
    <a class="button" style="font-size:20px;position:absolute;text-align: center; height: 25px;border-radius:40px;" href="Customer_Display.php"> <b>View all Packages</a>
  </div>
</body>
</b>

</html>