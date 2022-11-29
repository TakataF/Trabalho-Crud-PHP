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
</head>
<body>
    <form action="newUser.php" method="post">

        <label for="login">Login:</label>
        <input type="text" maxlength="15" name="login">
        <br>
        <label for="passwrd">Password:</label>
        <input type="password" name="passwrd">
        <br>
        <input type="submit" value="Cadastrar" name="submit">

    </form>
</body>
</html>