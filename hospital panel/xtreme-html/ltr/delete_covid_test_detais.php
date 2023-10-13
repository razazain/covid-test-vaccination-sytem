<?php
include('conn.php');
$id=$_REQUEST['tid'];
$query = "DELETE FROM covid_test_type WHERE c_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:covid_test_type.php"); 

?>