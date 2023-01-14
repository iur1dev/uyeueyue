<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);

$nome_pag = "Datas";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

if (isset($_GET['idv'])) {
    $idv = $_GET['idv'];
} else {
    $idv = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['btn_update'])) {
        $data_1_parcela = $idv;

        var_dump($data_1_parcela);
        echo 'teste';

        // $sql_insert_data = "insert into vendas (data_1_parcela) values ('$data_1_parcela')";
        // $query_insert_data = $conn->query($sql_insert_data) or die('erro insert data ' . $conn->error);
    }
}

$sql_total_cesta = "SELECT SUM(valor_cesta) as total FROM vendas WHERE id_clientes = '$id'";
$query_total_cesta = $conn->query($sql_total_cesta) or die("erro query total " . $conn->error);

$sql_prox_venc = "SELECT min(data_1_parcela) as prox_venc FROM vendas WHERE id_clientes = '$id'";
$query_prox_venc = $conn->query($sql_prox_venc) or die("erro query data " . $conn->error);

$sql_clientes = "select * from clientes where '$id' = id_clientes";
$query_clientes = $conn->query($sql_clientes) or die("erro sql " . $conn->error);

$sql = "SELECT * FROM vendas
WHERE '$idv' = id_vendas ";
$query = $conn->query($sql) or die('erro select vendas ' . $conn->error);

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
            <a href="vendas_datas.php?id=<?php echo $id ?>" class=" col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($query_clientes)) {
            echo '<p style="width: 18rem;" class="bg-danger rounded-2 mx-auto mt-3 p-1 text-center">ID: ' . $row['id_clientes'] . ' | Nome: ' . $row['nome'] . '</p>';
        }
        ?>
        <div class="card text-dark my-3 mx-auto text-center" style="width: 18rem;">
            <div class="card-body">
                <?php
                while ($row = mysqli_fetch_assoc($query_prox_venc)) {
                    echo ' <p class="card-text">Proximo Vencimento ' . ($row['prox_venc'] ? date('d/m/Y', strtotime($row['prox_venc'])) : "") . '</p>';
                }
                ?>
            </div>
        </div>
        <form method="POST">
            <table class="table text-white table-hover text-center">
                <thead>
                    <tr>
                        <th scope="">ID Venda</th>
                        <th scope="col">Parcelas</th>
                        <th scope="col">Data de Pagamento</th>
                        <th scope="col">Datas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo '<tr>';

                        echo '<td>' . $row['id_vendas'] . '</td>';

                        echo '<td>';
                        if ($row['id_metodo_pagamento'] == 1) {
                            echo '<p>1ª Parcela</p>';
                        } else if ($row['id_metodo_pagamento'] == 2) {
                            $duas_vezes = $row['valor_cesta'] / 2;
                            echo '<p>1ª Parcela</p>';
                            echo '<p>2ª Parcela</p>';
                        } else if ($row['id_metodo_pagamento'] == 3) {
                            $tres_vezes = $row['valor_cesta'] / 3;
                            echo '<p>1ª Parcela</p>';
                            echo '<p>2ª Parcela</p>';
                            echo '<p>3ª Parcela</p>';
                        } else if ($row['id_metodo_pagamento'] == 4) {
                            $quatro_vezes = $row['valor_cesta'] / 4;
                            echo '<p>1ª Parcela</p>';
                            echo '<p>2ª Parcela</p>';
                            echo '<p>3ª Parcela</p>';
                            echo '<p>4ª Parcela</p>';
                        }
                        echo '</td>';

                        echo '<td>';
                        if ($row['id_metodo_pagamento'] == 1) {
                            echo '<input disabled name="a' . $row['id_vendas'] . '" type="date" class="form-control text-center" value="' . ($row['data_1_parcela'] ? $row['data_1_parcela'] : "") . '">';
                        } else if ($row['id_metodo_pagamento'] == 2) {
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_1_parcela'] ? $row['data_1_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_2_parcela'] ? $row['data_2_parcela'] : "") . '">';
                        } else if ($row['id_metodo_pagamento'] == 3) {
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_1_parcela'] ? $row['data_1_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_2_parcela'] ? $row['data_2_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_3_parcela'] ? $row['data_3_parcela'] : "") . '">';
                        } else if ($row['id_metodo_pagamento'] == 4) {
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_1_parcela'] ? $row['data_1_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_2_parcela'] ? $row['data_2_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_3_parcela'] ? $row['data_3_parcela'] : "") . '">';
                            echo '<input disabled type="date" class="form-control text-center" value="' . ($row['data_4_parcela'] ? $row['data_4_parcela'] : "") . '">';
                        }
                        echo '</td>';

                        echo '<td>';
                        echo "<a href='datas2.php?idv=" . $row['id_vendas'] . "&id=" . $row['id_clientes'] . "'><i class='fa-regular fa-calendar fs-4 primary'></i></a>";
                        echo '</td>';

                        echo '<tr>';
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>