<?php
$_SESSION["login"] = false;
    session_start();
    session_unset();
    session_destroy();
    $_SESSION = null;
    header('location:../view/login.php');
    ?>
    