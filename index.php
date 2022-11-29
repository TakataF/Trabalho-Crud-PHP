<?php
    session_start();

    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['passwrd']) == true)){
        header('location:src/pages/login.php');
    }

    $logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h3>
        <?php echo "Bem vindo $logado."?>
    </h3>

    <p>
        <a href="src/pages/logout.php">Logout</a>
    </p>
</body>
</html>