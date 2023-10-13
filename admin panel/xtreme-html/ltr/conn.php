<?php
$server="localhost";
$username="root";
$password="";
$dbname="covid_db";


$conn=mysqli_connect($server,$username,$password) or die(mysqli_error($conn));
mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));



?>