<?php
include("Customerloginconfig.php");
?>
<?php
if (isset($POST['submit'])) {
}
$name = $_POST['name'];
$password = $_POST['password'];
$query = "SELECT * FROM customer where cust_name ='$name' && cust_pass='$password'";
$result = mysqli_query($con, $query);
$total = mysqli_num_rows($result);

if ($total == 1) {
    echo "LOGIN OK";
    header('location: Customer_Display.php');
} else {
    echo "LOGIN FAILED SO SADDD";
}
?>
