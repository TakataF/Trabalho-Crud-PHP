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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="../Trabalho-Crud-PHP/src/css/index.css" rel="stylesheet">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h3 class="navbar-brand"><?php echo "Bem vindo $logado"?></h3>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="src/pages/logout.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/pages/addProduct.php">Cadastrar Produtos</a>
            </li>
        </ul>
    </div>
    </nav>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">AÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $instance = DBConnection::getInstance();
                    $conn = $instance->getConnection();

                    $result = $conn->query("SELECT * FROM product");

                    foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row => $value) {
                    
                ?>
                    <tr id="row<?php echo $value['id'];?>">
                        <th scope="row"><?php echo $value['id'];?></th>
                        <td ondblclick="includeEvents(this)"> <?php echo $value['name'];?> </td>
                        <td ondblclick="includeEvents(this)"> <?php echo $value['description'];?> </td>
                        <td ondblclick="includeEvents(this)"> <?php echo $value['qtd_avaliable'];?> </td>
                        <td ondblclick="includeEvents(this)"> <?php echo $value['unit_price'];?> </td>
                        <td>
                            <button onClick="deleteProduct(<?php echo $value['id'];?>)" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button id="btnSave<?php echo $value['id'];?>" hidden onclick="changeProduct(this.parentElement.parentElement)" class="btn btn-success">
                                <i class="bi bi-save"></i>
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script type="text/javascript" src="src/js/operations.js"></script>

</body>
</html>