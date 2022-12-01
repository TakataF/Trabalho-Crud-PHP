<?php
    session_start();
    require('db/DBConnection.php');

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

    <p>
        <a href="src/pages/addProduct.php">Cadastrar Produto</a>
    </p>

    <div>
        <?php
            $instance = DBConnection::getInstance();
            $conn = $instance->getConnection();

            $result = $conn->query("SELECT * FROM product");

            foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row => $value) {
                echo $value['id'] . " - " . $value['name'] . " - " . $value['description'] . " - " . $value['qtd_avaliable'] . " - " . $value['unit_price'] . " <br> ";
            }
        ?>
    </div>
</body>
</html>