<?php

    session_start();
    require('../../db/DBConnection.php');

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['passwrd']) == true)){
        header('location:login.php');
    }

    $instance = DBConnection::getInstance();
    $conn = $instance->getConnection();

    $productId = $_REQUEST['productId'];
    $productName = $_REQUEST['productNome'];
    $productDesc = $_REQUEST['productDesc'];
    $productQtd = $_REQUEST['productQtd'];
    $productPrice = $_REQUEST['productPreco'];

    $sql = "UPDATE `product` 
            SET name = '$productName',
                description = '$productDesc',
                qtd_avaliable = $productQtd,
                unit_price = $productPrice
            WHERE id = $productId";

    try {
        $conn->query($sql);
    } catch (PDOException $e) {
        
    }
?>