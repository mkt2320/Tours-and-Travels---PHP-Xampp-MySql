<?php

$link = mysqli_connect("localhost", "root", "", "miniproject");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['username']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$contact = mysqli_real_escape_string($link, $_POST['contact']);
$address = mysqli_real_escape_string($link, $_POST['address']);


//insert query execution
$sql = "INSERT INTO account (cust_name,cust_pass,cust_email,cust_address,mobile_no) 
VALUES ('$name','$password','$email','$address','$contact')";



if(mysqli_query($link, $sql)){
    
    header('location: CustomerLogin.php ');
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
