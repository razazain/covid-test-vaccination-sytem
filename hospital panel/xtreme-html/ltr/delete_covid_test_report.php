<?php
include('conn.php');
$id=$_REQUEST['pid'];
$query = "DELETE FROM covid_test_report WHERE test_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:covid_test_report.php");
?>