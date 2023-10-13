<?php
include('conn.php');
$id=$_REQUEST['cid'];
$query = "DELETE FROM covid_test_request WHERE request_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:appointment.php"); 

?>