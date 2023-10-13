<?php
include('conn.php');
$id=$_REQUEST['pid'];
$query = "DELETE FROM vaccination_report WHERE t_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location: vaccination_report.php");
?>