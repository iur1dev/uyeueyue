<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

$nome_pag = "Estoque";

$query = $conn->query('SELECT * FROM tb_produtos') or die('erro query estoque' . $conn->error);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $qnt = $_POST['qnt'];
    $valor = $_POST['valor'];

    $sql_insert = "INSERT INTO tb_estoque (id_produtos, quantidade, valor) VALUES ('$produto', '$qnt', '$valor')";
    $query_insert = $conn->query($sql_insert) or die('erro na query insert ' . $conn->error);

    $sql_insert2 = "UPDATE tb_produtos SET quantidade = quantidade + '$qnt' WHERE id_produtos = '$produto'";
    $sql_insert2 = $conn->query($sql_insert2) or die('erro select 2 ' . $conn->error);
}

$query_select = $conn->query('SELECT * FROM tb_produtos') or die('erro query estoque' . $conn->error);

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
            <a href="home.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>

        <form method="POST" class="mt-3">
            <select class="form-select text-center" aria-label="Default select example" name="produto">
                <option selected>Escolha o Produto</option>
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<option value="' . $row['id_produtos'] . '">' . $row['nome'] . '</option>';
                }
                ?>
            </select>

            <input type="number" class="form-control text-center my-3" placeholder="Quantidade" name="qnt">
            <input type="number" class="form-control text-center" placeholder="Valor da Unidade" name="valor">

            <div class="text-center">
                <button class="btn btn-primary my-3" type="submit">Enviar</button>
            </div>
        </form>

        <table class="table table-hover text-white table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query_select)) {
                    echo '<tr>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['quantidade'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>