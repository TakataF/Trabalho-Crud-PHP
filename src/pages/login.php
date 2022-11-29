<?php

    if (isset($_GET['msg'])) {
        echo "<script>alert('" . $_GET['msg'] . "');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/login.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
        </div>
    </nav>

    <!----------------------------------------->
    
    <form action="auth.php" method="post">
        <label for="login">Login:</label>
        <input required type="text" maxlength="15" name="login">
        <br>
        <label for="passwrd">Password:</label>
        <input required type="password" name="passwrd">
        <br>
        <input class="btn btn-warning" type="submit" value="Login" name="submit">
        <br>
        <span>Não tem conta? <a href="newUser.php">Cadastre-se</a></span>
    </form>

    <!----------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>