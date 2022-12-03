<?php

    session_start();
    require('../../db/DBConnection.php');

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['passwrd']) == true)){
        header('location:login.php');
    }

    $instance = DBConnection::getInstance();
    $conn = $instance->getConnection();

    $productID = $_REQUEST['productId'];

    $sql = "DELETE FROM `product` WHERE id = $productID";

    try {
        $conn->query($sql);
    } catch (PDOException $e) {
        
    }

?>