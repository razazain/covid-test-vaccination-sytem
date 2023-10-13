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
                            <a href="index.php"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="patient_email" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="patient_password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="register.php"><span>Creat New account?</span>Register</a>
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
        $patient_email = $_POST['patient_email'];
        $patient_password = $_POST['patient_password'];

        if ($patient_email == 'Hello' && $password == 'admin') {
            $_SESSION['usp'] = $patient_email;
            header('Location:index.php');
        } else {
            $sql_query = "select * from patient_detail where patient_email='$patient_email' and patient_password='$patient_password' ";
            $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
            $row = mysqli_num_rows($result);
            $data = mysqli_fetch_array($result);


            if ($row > 0) {
                $_SESSION['usp'] = $data['patient_id'];
                header('Location: index.php');
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