<?php
include('conn.php');
$id=$_REQUEST['vid'];
$query = "DELETE FROM vaccine_details WHERE vaccine_details_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn,$query));
header("Location:vaccine_detail.php"); 

?>