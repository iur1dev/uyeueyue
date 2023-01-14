<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

$nome_pag = "Valor de Estoque";

$sql = "";
$query = $conn->query($sql) or die('erro select ' . $conn->error);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_pag ?></title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container">
        <div class="row bg-danger rounded-2">
            <a href="relatorios.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>

        <div class="card text-dark my-3 mx-auto text-center" style="width: 18rem;">
            <div class="card-body">
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<h5 class="card-title">Valor Total em Estoque: ' . $row['teste'] . '</h5>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>