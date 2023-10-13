<?php
include('conn.php');
$id=$_REQUEST['hid'];
$query = "DELETE FROM hospital_login WHERE hospital_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:hospital_details.php"); 

?>