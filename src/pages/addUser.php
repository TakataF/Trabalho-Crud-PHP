<?php

    require('../../db/DBConnection.php');
    
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['passwrd'])) {

        $instance = DBConnection::getInstance();
        $conn = $instance->getConnection();

        $login = $_POST['login'];
        $passwrd = md5($_POST['passwrd']);
        
        $sql = "INSERT INTO user(login, password) VALUES('$login', '$passwrd')";

        $conn->query($sql);

        header("location:login.php");

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
    <link href="../css/newuser.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../pages/login.php">Home</a>
        </div>
    </nav>

    <!---------------------------------------------------->

    <form action="addUser.php" method="post">
        <div class="d-flex justify-content-center">
            <label id="loginlabel" for="login">Login:</label>
            <input type="text" maxlength="15" name="login">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <label id="password" for="passwrd">Password:</label>
            <input type="password" name="passwrd">
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