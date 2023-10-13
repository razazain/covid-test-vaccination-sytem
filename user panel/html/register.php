<?php
include("conn.php");
ob_start();
session_start();





 
if(isset($_POST['add_rec']))
{
    $patient_name=$_POST['patient_name'];
    $patient_address=$_POST['patient_address'];
    $patient_city=$_POST['patient_city'];
    $patient_num=$_POST['patient_num'];
    $patient_email=$_POST['patient_email'];
    $patient_age=$_POST['patient_age'];
    $patient_password=$_POST['patient_password'];


    $filename=$_FILES["patient_img"]["name"];
    $tempname=$_FILES["patient_img"]["tmp_name"];
    $folder="./img_rec/".$filename;



    $sql_query="insert into patient_detail (patient_name,patient_address,patient_city,patient_num,patient_email,patient_age,patient_password,patient_img) values 
    ('$patient_name','$patient_address','$patient_city','$patient_num','$patient_email','$patient_age','$patient_password','$filename')";
        $result=mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

            if($result)
            {
                if(move_uploaded_file($tempname,$folder));
                {
                  echo '<script>alert("You Are Successfullly Register")</script>';
                  header('Location:login.php');
                }
            }
            else
            {
                echo '<script> alert("record not save in database") </script>';
            }
}






?>


<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Register | Online Covid Test and Vaccination</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="POST" enctype="multipart/form-data" class="form-signin">
                        <div class="account-logo">
                            <a href="index.php"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="patient_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="patient_address" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="patient_city" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="patient_num" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="patient_email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="patient_age" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Select Image :</label>
                            <input type="file" class="form-control form-control-lg" name="patient_img">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="patient_password" required class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <input name="add_rec" value="Register" class="btn btn-primary account-btn" type="submit">
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

<?php
ob_flush();
?>

</html>