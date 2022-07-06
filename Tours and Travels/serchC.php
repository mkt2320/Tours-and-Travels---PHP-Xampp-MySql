<?php
include("config.php");
?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Search by name</title>




<style>
body 
{
  font-family: Arial;margin:0;
  background-color: whitesmoke;
}


.bg-img {
  /* The image used */
  background-image: url("s3.jpg");height:780px;filter: blur(px);-webkit-filter: blur(px);
  width:1536px;
  margin:0px;
  height: 753px ;
  background-position: bottom ;
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
  background-color: #0b495e;#0b495e
  display:inline-block;
    padding: 10px 0px;
    margin-left: 42px;
  border: none;
   height: 07%;
  width: 40%;
  opacity: 1;
  cursor: pointer;
  border-radius: 05px;
}

.button:hover {
  background-color: green ;
  opacity: 1;
}

input
{
  background-color: whitesmoke;
  height: 50px;
  width: 40%;
  border: 1px;
  border-radius: 05px;
  padding: 8px 15px 8px 15px;
  margin: 20px 0px 0px 30px;
  box-shadow: 1px 1px 2px 1px grey;
}


form.example input[type=text] 
{
  font-weight: bold;
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;

}

h1{
  font-size: 80px;
  color: #fff;
 
  text-shadow: 0 0 1px #fff, 0 0 05px #d4af37, 0 0 05px blue, 0 0 05px #d4af37, 0 0 05px darkblue, 0 0 05px blue;

}
</style>
</head>





<body style="background-color: whitesmoke ">


  <div class="bg-img">

<h1 style="font-size: 50px;margin-left: 55px;margin-top: 60px">Search by package name</h1>


  <form action="" method="POST">
        <input type= "text" name= "name" style="font-weight: bold;font-size: 15px;" placeholder= "Enter package name to search"><br>
        
<button style="font-size:20px" type="submit" name="search" class="button"><b> Search data
</button>
      <br>

  </form>


<?php

error_reporting(0);
if(isset($_POST['search']))
{
  $name= $_POST['name'];
  $query = "SELECT * FROM package where package_name='$name' ";
  $query_run =mysqli_query($con,$query);
  




  while($row = mysqli_fetch_array($query_run))

{



?>
     
      <form action="" method="POST">



        
        <input type= "text" name= "package_id" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['package_id']?>"/><br>
        <input type= "text" name= "package_price" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['package_price']?>"/><br>
        <input type= "text" name= "mode_of_transport" style=" background-color: #2b2d42;color:white;font-size:20px;text-align: center;cursor:not-allowed" value="<?php echo $row['mode_of_transport']?>"/><br>
      </form> 



<?php
  } 
}

?>

<br><br>
<a  class="button" style="font-size:20px;position:absolute;text-align: center; height: 25px;border-radius:40px;"  href="Customer_Display.php" > <b>View all Packages</a>
</div>





 </body>       
</b>
</html>



