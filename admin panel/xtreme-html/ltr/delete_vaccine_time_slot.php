<?php
include('conn.php');
$id=$_REQUEST['tid'];
$query = "DELETE FROM vaccine_timeslot WHERE vaccine_time_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:time_slot.php");

?>