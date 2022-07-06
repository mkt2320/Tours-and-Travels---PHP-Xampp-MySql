<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Packages</title>
</head>


<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


.bg-img {
  /* The image used */
  background-image: url("s1.jpg");height:730px;filter: blur(px);-webkit-filter: blur(px);
  width:1519px;
margin:0px;
  height: auto;
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



.button 
{

color: white;
  background-color: #2b2d42   
;#0b495e #0c706f
  display:inline-block;
    
    position: absolute;
  top: ;
  left: 10%;
  border: none;
  
  opacity: 1;
  cursor: pointer;
margin: 35px;  border: none;
  width: 100%;
  opacity: 1;
  cursor: pointer;
}


.btn {

color: white;
  background-color:#0c706f;#1f618d
  display:inline-block;
   
    background-color: #2b2d42;
  position: absolute;
  top: 4.4%;
  right: 15%;
  border: none;
  width: 100%;
  opacity: 1;
  cursor: pointer;
}

table, td, th {  
  border-bottom: 2px solid grey;
  text-align: left;
}

tr:nth-child(even) {background-color: whitesmoke;}
tr:nth-child(odd) {background-color:lightgrey;}
table { background-color: #F2DBDE;  border-collapse: collapse;}
th { background-color:  #2b2d42 ;padding: 15px ;text-align: center;#0b495e #ffd78c}
td{font-size: 30px;text-align: center;}

h1{
  font-size: 80px;
  color: #fff;
  text-align: center;
  text-shadow: 0 0 1px #fff, 0 0 2px blue, 0 0 15px brown, 0 0 10px brown,  0 0 10px brown;

}

</style>

<body style="background-color: Black ">

<div class="bg-img">  

<a  class="button" style="width:150px;padding: 15px 20px;margin: 50px;text-align: center;" href="serchC.php" ><b>Search </a>
<br><br>


  <a class="btn" style="width:150px;padding: 15px 20px;color:white;text-align: center;"
  href="index.php" ><b>Logout</a></button>
<br><br>

<center><h1 style="color:white;font-size: 80px;">Packages</h1></center>





<?php
include("config.php");
error_reporting(0);
$query = "select * FROM package";
$data = mysqli_query ($con, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
?>
    <br><br>
    <b> <table   text-color="white" border="1px" align="center" width="90%"  text-align="center";
  padding= "0px";} >
        <tr>
           <th style="color: white;font-size: 30px;">Image</th>
           <th style="color: white;font-size: 30px;">Package ID</th>
           <th style="color: white;font-size: 30px;">Package Name</th>   
           <th style="color: white;font-size: 30px;">Package Price</th>
           <th style="color: white;font-size: 30px;">Mode of Transport</th>
           

        </tr>  </h2> 
  <?php



  while($result = mysqli_fetch_assoc($data))
    {

      echo"<tr >
              <td style='padding:5px;'><img src= ' ".$result['image']." 'height='300' width='600' align='center' /></td>
              <td style='padding:5px;cursor:not-allowed'>".$result['package_id']."</td>
              <td style=' padding:5px;'>".$result['package_name']."</td>
              <td style=' padding:5px;'>".$result['package_price']."</td>
              <td style=' padding:5px;'>".$result['mode_of_transport']."</td>
          
              

          </tr>";      
            
      
    }
  
}
else
{
   echo "NO RECORD FOUND";

}

  
?>
</table>

<br><br><br><br><br>

</div>
<script>
   function checkdelete()
   {
       return confirm('Are you sure you want to delete this data??');
    }
</script>

<br><br><br><br>
