<?php
    session_start();
    unset($_SESSION['amp']);
    session_destroy();
    header("Location:login.php");
?>