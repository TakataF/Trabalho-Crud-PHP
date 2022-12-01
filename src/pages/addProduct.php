<?php

    session_start();
    require('../../db/DBConnection.php');

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['passwrd']) == true)){
        header('location:login.php');
    }

    $logado = $_SESSION['login'];

    if(isset($_POST['submit'])) {

        $instance = DBConnection::getInstance();
        $conn = $instance->getConnection();

        $name = $_POST['name'];
        $description = $_POST['description'];
        $qtd_avaliable = $_POST['qtd_avaliable'];
        $unit_price = $_POST['unit_price'];
        
        
        $sql = "INSERT INTO `product`(`name`, `description`, `qtd_avaliable`, `unit_price`)
                VALUES('$name', '$description', $qtd_avaliable, $unit_price)";

        try {
            $conn->query($sql);
            echo "<script>alert('Produto Cadastrado!');</script>";
            header("location:../../index.php");
        } catch (PDOException $e) {
            echo "<script>alert('Produto não Cadastrado! Houve um erro.');</script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/addproduct.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h3 class="navbar-brand"><?php echo "Bem vindo $logado"?></h3>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="src/pages/logout.php">Logout</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Trabalho-Crud-PHP/index.php">Voltar ao Inicio</a>
            </li>
        </ul>
    </div>
    </nav>

    <!---------------------------------------------------->

    <form action="addProduct.php" method="post">
        <div class="d-flex justify-content-center">
            <label id="name" for="name">Nome:</label>
            <input required type="text" maxlength="100" name="name">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <label id="description" for="description">Descrição:</label>
            <input required type="text" maxlength="150" name="description">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <label id="qtd_avaliable" for="qtd_avaliable">Quantidade Disponível:</label>
            <input required type="number" name="qtd_avaliable">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <label id="unit_price" for="unit_price">Preço Unitário:</label>
            <input required type="number" step="0.01" name="unit_price">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <input class="btn btn-warning" type="submit" value="Cadastrar" name="submit">
        </div>
    </form>

    <!---------------------------------------------------->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>