<?php
include("Customerloginconfig.php");
?>
<?php
 if(isset($POST['submit']))
 {}
  $name=$_POST['name'];
  $password=$_POST['password'];
  $query="SELECT * FROM admin where admin_name ='$name' && admin_pass='$password'";
  $result=mysqli_query($con,$query);

  $total=mysqli_num_rows($result);

  
 if($total==1)
  {
   echo "LOGIN OK";
   header("location:AddPackage.php");
  }
  else
  {
   echo '<script>alert("LOGIN FAILED!!! try again.")</script>'; 
   
  }
  ?>