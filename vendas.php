<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);

$nome_pag = "Vendas";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$sql_valor_cesta = "select * from valor_cesta";
$query_valor_cesta = $conn->query($sql_valor_cesta) or die("erro select valor_cesta" . $conn->error);

$sql_select = "select * from clientes where '$id' = id_clientes";
$query_select = $conn->query($sql_select) or die("erro select clientes" . $conn->error);


while ($row = mysqli_fetch_assoc($query_valor_cesta)) {
    $_SESSION['valor_cesta'] = $row['valor_cesta'];
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $valor_cesta = $_SESSION['valor_cesta'];
    $metodo_pagamento = $_POST['metodo_pagamento'];

    $sql = "insert into vendas (id_clientes, id_metodo_pagamento, valor_cesta)
    values ('$id', '$metodo_pagamento', '$valor_cesta' )";
    $query = $conn->query($sql) or die('erro insert' . $conn->error);
}

if (isset($_GET['idv'])) {
    $idv = $_GET['idv'];
} else {
    $idv = 0;
}

$sql = "SELECT * FROM vendas as v
INNER JOIN metodo_pagamento as m 
ON m.id_metodo_pagamento = v.id_metodo_pagamento
where '$id' = id_clientes ORDER BY id_vendas desc";
$query = $conn->query($sql) or die('erro select vendas ' . $conn->error);

if ($idv > 0) {
    $sql_delete = "delete from vendas where '$idv' = id_vendas";
    $query_delete = $conn->query($sql_delete) or die("erro delete " . $conn->error);

    $_SESSION['excluido'] = $query_delete;

    // header('Location: clientes.php');
}

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
        <div class="row bg-danger rounded-2 mb-2">
            <a href="clientes.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>
        <?php
        while ($row2 = mysqli_fetch_assoc($query_select)) {
            echo '<p style="width: 18rem;" class="bg-danger rounded-2 mx-auto mt-3 p-1 text-center">ID: ' . $row2['id_clientes'] . ' | Nome: ' . $row2['nome'] . '</p>';
        }
        ?>
        <form method="POST">
            <select class="form-select mx-auto mt-3 text-center" name="metodo_pagamento" id="metodo_pagamento" style="width: 18rem;" aria-label="Default select example">
                <option selected>Escolha a Forma de Pagamento</option>
                <option value="1">1x</option>
                <option value="2">2x</option>
                <option value="3">3x</option>
                <option value="4">4x</option>
            </select>
            <div class="mx-auto mt-3" style="width:18rem;" id="receba">
            </div>

            <div class="text-center">
                <button class="btn btn-primary" type="submit">Concluir</button>
            </div>
        </form>
        <form method="GET">
            <table class="table text-white table-hover text-center">
                <thead>
                    <tr>
                        <th scope="">ID Venda</th>
                        <th scope="col">Data da Compra</th>
                        <th scope="col">Forma de Pagamento</th>

                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo '<tr>';
                        echo '<td>' . $row['id_vendas'] . '</td>';
                        echo '<td>' . date('d/m/Y', strtotime($row['data_venda'])) . '</td>';
                        echo '<td>';
                        echo '<p>' . $row['metodo'] . '</p>';
                        echo '</td>';
                        echo '<td><a href="vendas.php?idv= ' . $row['id_vendas'] . '" class="btn"><i class="fa-solid fa-trash fs-4 text-danger"></i></a>';
                        echo '</td>';
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    <?php include_once("includes/scripts.php"); ?>
</body>

</html>