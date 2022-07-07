<?php
include("config.php");
?>

<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Search by Package ID</title>
  <link rel="stylesheet" type="text/css" href="CSS\search.css" media="screen" />
</head>


<body>
  <div class="bg-img">
    <h1>Search</h1>
    <b>
      <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter id to search"><br>
        <button type="submit" name="search" class="button"><b> Search data </button><br>
      </form>


      <?php
      error_reporting(0);
      if (isset($_POST['search'])) {
        $id = $_POST['id'];
        $query = "SELECT * FROM package where package_id='$id' ";
        $query_run = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($query_run)) {
      ?>
          <form action="" method="POST">
            <input type="text" name="package_name" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed;" value="<?php echo $row['package_name'] ?>" /><br>
            <input type="text" name="package_price" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed;" value="<?php echo $row['package_price'] ?>" /><br>
            <input type="text" name="mode_of_transport" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed;" value="<?php echo $row['mode_of_transport'] ?>" /><br>
          </form>
      <?php
        }
      }
      ?>
      <br><br>
      <a class="button" style="font-size:20px; position:absolute; text-align:center; height:25px;border-radius:40px;" href="Admin_Display.php"><b> View all Packages</a>
    </b>
  </div>
</body>

</html>