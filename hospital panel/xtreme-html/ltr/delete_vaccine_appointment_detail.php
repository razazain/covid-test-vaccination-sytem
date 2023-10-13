<?php
include('conn.php');
$id=$_REQUEST['vid'];
$query = "DELETE FROM vaccine_request WHERE request_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:vaccine_appointment.php"); 

?>