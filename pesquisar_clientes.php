<?php
include_once("includes/conn.php");
include_once("protect.php");


if (isset($_SESSION['atualizado'])) {
    echo '<div class="alert alert-success fw-bold text-center" role="alert">Atualizado</div>';
}

if (isset($_SESSION['venda'])) {
    echo '<div class="alert alert-success fw-bold text-center" role="alert">Venda Concluida</div>';
}

if (isset($_SESSION['excluido'])) {
    echo '<div class="alert alert-danger fw-bold text-center" role="alert">Venda Excluida</div>';
}

$sql_select = "SELECT * from clientes ORDER BY id_clientes desc";
$query_select = $conn->query($sql_select) or die("erro sql" . $conn->error);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $pesquisar = $_POST['pesquisar'];
    $result_clientes = "select * from clientes where nome like '%$pesquisar%' or id_clientes like '$pesquisar'";
    $resultado_clientes = $conn->query($result_clientes) or die('erro sql' . $conn->error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

if ($id > 0) {
    $sql_delete = "delete from clientes where '$id' = id_clientes";
    $query_delete = $conn->query($sql_delete) or die('<h1 class="fw-bold text-primary">Não pode deletar o cadastro pq tem cesta vinculada</h1>' . $conn->error);
    header('Location: pesquisar_clientes.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Clientes</title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container">
        <div class="row bg-danger rounded-2">
            <a href="home.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6">Pesquisar Clientes</h1>
            <div class="col-3"></div>
        </div>
        <form method="POST">
            <div class="mb-3 mt-3 col-md-4 mx-auto">
                <input type="text" class="form-control text-center" name="pesquisar" placeholder="Pesquise pelo Nome ou ID do cliente">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>
        <table class="table table-hover">
            <thead class="text-white">
                <tr>
                    <th></th>
                    <th></th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-white">
                <?php

                if (isset($pesquisar)) {
                    while ($row = mysqli_fetch_array($resultado_clientes)) {
                        echo "<tr>";
                        echo "<th><a href='vendas.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-utensils fs-4 text-secondary'></i></a></th>";
                        echo "<th><a href='pagamentos.php?id=" . $row['id_clientes'] . "'><i class='fa-sharp fa-solid fa-coins fs-4 text-warning'></i></a></th>";
                        echo "<th>" . $row['id_clientes'] . "</th>";
                        echo "<th>" . $row['nome'] . "</th>";
                        echo "<th><a href='atualizar_cadastros.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-clipboard fs-4 text-success'></i></a></th>";
                        echo "<th><a href='pesquisar_clientes.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a></th>";
                        echo "</tr>";
                    }
                } else {
                    while ($row = mysqli_fetch_assoc($query_select)) {
                        echo "<tr>";
                        echo "<th><a href='vendas.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-utensils fs-4 text-secondary'></i></a></th>";
                        echo "<th><a href='pagamentos.php?id=" . $row['id_clientes'] . "'><i class='fa-sharp fa-solid fa-coins fs-4 text-warning'></i></a></th>";
                        echo "<th>" . $row['id_clientes'] . "</th>";
                        echo "<th>" . $row['nome'] . "</th>";
                        echo "<th><a href='atualizar_cadastros.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-clipboard fs-4 text-success'></i></a></th>";
                        echo "<th><a href='pesquisar_clientes.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a></th>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Quer mesmo excluir esse cadastro ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>

</html>