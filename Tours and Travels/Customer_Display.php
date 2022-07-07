<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Packages</title>
  <link rel="stylesheet" type="text/css" href="CSS\Customer_Display.css" media="screen" />
</head>

<body style="background-color: Black ">
  <div class="bg-img">
    <a class="button" style="width:150px;padding: 15px 20px;margin: 50px;text-align: center;" href="serchC.php"><b>Search </a>
    <br><br>
    <a class="btn" style="width:150px;padding: 15px 20px;color:white;text-align: center;" href="index.php"><b>Logout</a></button>
    <br><br>
    <center>
      <h1 style="color:white;font-size: 80px;">Packages</h1>
    </center>

    <?php
    include("config.php");
    error_reporting(0);
    $query = "select * FROM package";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);

    if ($total != 0) {
    ?>
      <br><br>
      <b>
        <table text-color="white" border="1px" align="center" width="90%" text-align="center" ; padding="0px" ;}>
          <tr>
            <th style="color: white;font-size: 30px;">Image</th>
            <th style="color: white;font-size: 30px;">Package ID</th>
            <th style="color: white;font-size: 30px;">Package Name</th>
            <th style="color: white;font-size: 30px;">Package Price</th>
            <th style="color: white;font-size: 30px;">Mode of Transport</th>
          </tr>
          </h2>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {

          echo "<tr >
              <td style='padding:5px;'><img src= ' " . $result['image'] . " 'height='300' width='600' align='center' /></td>
              <td style='padding:5px;cursor:not-allowed'>" . $result['package_id'] . "</td>
              <td style=' padding:5px;'>" . $result['package_name'] . "</td>
              <td style=' padding:5px;'>" . $result['package_price'] . "</td>
              <td style=' padding:5px;'>" . $result['mode_of_transport'] . "</td>
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
  <br><br><br><br>

</body>

</html>