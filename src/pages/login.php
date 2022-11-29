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
</head>
<body>
    <form action="auth.php" method="post">
        <label for="login">Login:</label>
        <input required type="text" maxlength="15" name="login">
        <br>
        <label for="passwrd">Password:</label>
        <input required type="password" name="passwrd">
        <br>
        <input type="submit" value="Login" name="submit">
        <span>Não tem conta? <a href="newUser.php">Cadastre-se</a></span>

    </form>
</body>
</html>