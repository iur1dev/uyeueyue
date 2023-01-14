<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['valor_cesta']);

$nomepag = 'Clientes';

if (isset($_SESSION['atualizado'])) {
    echo '<div class="alert alert-success fw-bold text-center" role="alert">Atualizado !</div>';
}

if (isset($_SESSION['venda'])) {
    echo '<div class="alert alert-success fw-bold text-center" role="alert">Venda Concluida !</div>';
}

if (isset($_SESSION['excluido'])) {
    echo '<div class="alert alert-danger fw-bold text-center" role="alert">Venda Excluida !</div>';
}

$sql = "SELECT * from clientes ORDER BY id_clientes desc";
$query = $conn->query($sql) or die("erro = SELECT * from clientes ORDER BY id_clientes desc" . $conn->error);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $pesquisar = $_POST['pesquisar'];

    $sql_pesquisar = "select * from clientes where nome like '%$pesquisar%' or id_clientes like '$pesquisar' ORDER BY id_clientes desc";
    $query_pesquisar = $conn->query($sql_pesquisar) or die('erro sql' . $conn->error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

if ($id > 0) {
    $sql_delete = "delete from clientes where '$id' = id_clientes";
    $query_delete = $conn->query($sql_delete) or die('Não pode deletar o cadastro pq tem cesta vinculada' . $conn->error);

    header('Location: clientes.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomepag ?></title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container">
        <div class="row bg-danger rounded-2">
            <a href="home.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nomepag ?></h1>
            <div class="col-3"></div>
        </div>
        <form method="POST">
            <div class="mb-3 mt-3 col-md-4 mx-auto">
                <input type="text" class="form-control text-center" name="pesquisar" placeholder="ID ou Nome do Cliente">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>
        <table class="table table-hover">
            <thead class="text-white">
                <tr class="text-center">
                    <th>Vendas</th>
                    <th>Datas</th>
                    <th>Pagamentos</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody class="text-white">
                <?php
                if (isset($pesquisar)) {
                    while ($row = mysqli_fetch_array($query_pesquisar)) {
                        echo "<tr class='text-center'>";
                        echo "<th><a href='vendas_datas.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-utensils fs-4 text-secondary'></i></a></th>";
                        echo "<th><a href='datas.php?id=" . $row['id_clientes'] . "'><i class='fa-regular fa-calendar fs-4 text-primary'></i></a></th>";
                        echo "<th><a href='pagamentos.php?id=" . $row['id_clientes'] . "'><i class='fa-sharp fa-solid fa-coins fs-4 text-warning'></i></a></th>";
                        echo "<th>" . $row['id_clientes'] . "</th>";
                        echo "<th>" . $row['nome'] . "</th>";
                        echo "<th><a href='atualizar_cadastros.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-clipboard fs-4 text-success'></i></a></th>";
                        echo "<th><a href='clientes.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a></th>";
                        echo "</tr>";
                    }
                } else {
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr class='text-center'>";
                        echo "<th><a href='vendas_datas.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-utensils fs-4 text-secondary'></i></a></th>";
                        echo "<th><a href='datas.php?id=" . $row['id_clientes'] . "'><i class='fa-regular fa-calendar fs-4 text-primary'></i></a></th>";
                        echo "<th><a href='pagamentos.php?id=" . $row['id_clientes'] . "'><i class='fa-sharp fa-solid fa-coins fs-4 text-warning'></i></a></th>";
                        echo "<th>" . $row['id_clientes'] . "</th>";
                        echo "<th>" . $row['nome'] . "</th>";
                        echo "<th><a href='atualizar_cadastros.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-clipboard fs-4 text-success'></i></a></th>";
                        echo "<th><a href='clientes.php?id=" . $row['id_clientes'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a></th>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>