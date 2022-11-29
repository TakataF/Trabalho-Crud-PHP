<?php
    session_start();

    require_once('../../db/DBConnection.php');

    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['passwrd'])) {
        
        $login = $_POST['login'];
        $passwrd = md5($_POST['passwrd']);

        $instance = DBConnection::getInstance();
        $conn = $instance->getConnection();

        $result = $conn->query("SELECT * FROM user WHERE login = '$login' AND password = '$passwrd'");

        $row = $result->fetch(PDO::FETCH_ASSOC);

        if ($row > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['passwrd'] = $passwrd;
            header('location:../../index.php');
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['passwrd']);
            $msg = "Login Fail";
            header("location:login.php?msg=$msg");
        }
    }

?>