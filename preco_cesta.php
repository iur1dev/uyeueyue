<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

$sql = "select * from valor_cesta";
$query = $conn->query($sql) or die('erro = select * from valor_cesta ' . $conn->error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor_cesta = $_POST['valor_cesta'];

    $sql_update = "update valor_cesta set valor_cesta = '$valor_cesta', valor_cesta_2 = ('$valor_cesta'/2), valor_cesta_3 = ('$valor_cesta'/3), valor_cesta_4 = ('$valor_cesta'/4)";
    $query_update = $conn->query($sql_update) or die('erro update valor_cesta set valor_cesta = valor_cesta' . $conn->error);

    $_SESSION['valor_cesta'] = $query_update;
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container">
        <div class="row bg-danger rounded-2 mb-2">
            <a href="configuracoes.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6">Preço da Cesta</h1>
            <div class="col-3"></div>
        </div>
        <form method="POST">
            <div class="col-3 mx-auto">
                <?php
                while ($row = $query->fetch_assoc()) {
                    echo '<input type="text" name="valor_cesta" class="form-control text-center mt-3" value="' . number_format($row['valor_cesta'], 2, ",", ".") . '">';
                }
                ?>
            </div>
            <div class="text-center">
                <button class="btn btn-primary mt-3" type="submit">Alterar</button>
            </div>
        </form>
    </div>
    <?php include_once("includes/scripts.php"); ?>
</body>

</html>