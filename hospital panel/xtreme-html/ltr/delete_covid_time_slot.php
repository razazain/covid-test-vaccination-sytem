<?php
include('conn.php');
$id=$_REQUEST['cid'];
$query = "DELETE FROM covid_test_timeslot WHERE time_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:time_slot.php");

?>