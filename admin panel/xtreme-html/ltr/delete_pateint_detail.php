<?php
include('conn.php');
$id=$_REQUEST['pid'];
$query = "DELETE FROM patient_detail WHERE patient_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:pateint_details.php"); 

?>