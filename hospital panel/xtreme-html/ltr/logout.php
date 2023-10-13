<?php
    session_start();
    unset($_SESSION['hmp']);
    session_destroy();
    header("Location:login.php");
?>