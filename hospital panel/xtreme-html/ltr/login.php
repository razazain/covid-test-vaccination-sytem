<?php
include("conn.php");
ob_start();
session_start();
?>




<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Login | Hopital Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post" class="form-signin">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Enter Hopital Email</label>
                            <input type="text" name="hospital_email" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="hospital_password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="register.php">Reigister</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary account-btn" value="Login" name="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['login'])) {
        $hospital_email = $_POST['hospital_email'];
        $hospital_password = $_POST['hospital_password'];

        if ($hospital_email == 'admin' && $hospital_password == 'admin') {
            $_SESSION['hmp'] = $hospital_email;
            header('Location:index.php');
        } else {
            $sql_query = "select * from hospital_login where hospital_email='$hospital_email' and hospital_password='$hospital_password' ";
            $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
            $row = mysqli_num_rows($result);
            $data = mysqli_fetch_array($result);


            if ($row > 0) {
                $_SESSION['hmp'] = $data['hospital_id'];
                echo "<script> alert('Welcome Admin') </script>";
                header('Location:index.php');
            } else {
                echo '<script> alert("Not Login") </script>';
            }
        }
    }


    ?>





    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->


<?php
ob_flush();
?>

</html>