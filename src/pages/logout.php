<?php

    session_start();

    unset($_SESSION['login']);
    unset($_SESSION['passwrd']);

    session_destroy();

    header('location:login.php');

?>