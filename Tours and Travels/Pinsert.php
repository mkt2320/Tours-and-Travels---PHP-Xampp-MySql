<?php

$link = mysqli_connect("localhost", "root", "", "miniproject");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$mot = mysqli_real_escape_string($link, $_POST['mot']);
$filename= $_FILES["uploadfile"]["name"];
$tempname= $_FILES["uploadfile"]["tmp_name"];
$folder= "Uploaded Image/".$filename;
move_uploaded_file($tempname,$folder);


//insert query execution
$sql = "INSERT INTO package (image,package_id,package_name,package_price,mode_of_transport) 
VALUES ('$folder','$id','$name','$price','$mot')";

echo $id,$name,$price,$mot,$folder;


if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
    header('Location: Admin_Display.php');
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
