<?php
include("config.php");
$pid = $_GET['id'];
$query ="DELETE FROM package WHERE package_id='$pid'";
$data = mysqli_query($con , $query);
if($data)
{

	echo"Record Deleted from table";
	header("Location:Admin_Display.php");
?>
	
<META HTTP-EQUIV="Refresh" CONTENT="1">


<?php
}
else 
{
	echo"Sorry , Delete process failed";
}
?>


