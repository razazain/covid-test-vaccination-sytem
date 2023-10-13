<?php
include("conn.php");
ob_start();
session_start();





 
if(isset($_POST['add_rec']))
{
    $hospital_name=$_POST['hospital_name'];
    $hospital_address=$_POST['hospital_address'];
    $hospital_num=$_POST['hospital_num'];
    $hospital_email=$_POST['hospital_email'];
    $hospital_password=$_POST['hospital_password'];


    $sql_query="insert into hospital_login (hospital_name,hospital_address,hospital_num,hospital_password,hospital_email) values 
    ('$hospital_name','$hospital_address','$hospital_num','$hospital_password','$hospital_email')";
        $result=mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

            if($result)
            {
                  echo '<script>alert("You Are Successfullly Register")</script>';
                  header('Location:login.php');
               
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
    <title>Register | Hopital Admin Panel</title>
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
                            <label>Hospital Name</label>
                            <input type="text" name="hospital_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="hospital_address" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <input type="number" name="hospital_num" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="hospital_email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="hospital_password" required class="form-control">
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