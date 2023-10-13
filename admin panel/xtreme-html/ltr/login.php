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
    <title>Login | Online Covid Test and Vaccination</title>
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
                            <label>Username</label>
                            <input type="text" name="username" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
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
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'Hello' && $password == 'admin') {
            $_SESSION['amp'] = $username;
            header('Location:index.php');
        } else {
            $sql_query = "select * from admin_login where username='$username' and password='$password' ";
            $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
            $row = mysqli_num_rows($result);
            $data = mysqli_fetch_array($result);


            if ($row > 0) {
                $_SESSION['amp'] = $data['admin_id'];
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