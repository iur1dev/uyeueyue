<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);

$nome_pag = "Vendas e Datas";

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

$sql_select = "select * from clientes where '$id' = id_clientes";
$query_select = $conn->query($sql_select) or die("erro select clientes" . $conn->error);

$sql_valor_cesta = "select * from valor_cesta";
$query_valor_cesta = $conn->query($sql_valor_cesta) or die('erro valor cesta ' . $conn->error);

$sql_valor_cesta2 = "select * from valor_cesta";
$query_valor_cesta2 = $conn->query($sql_valor_cesta2) or die('erro valor cesta2 ' . $conn->error);

$sql_table = "SELECT * FROM vendas where id_clientes = '$id' ORDER BY id_vendas DESC";
$query_table = $conn->query($sql_table) or die('Erro: ' . $sql_table . $conn->error);


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
            echo '<p id="id_cli" hidden>' . $row2['id_clientes'] . '</p>';
            echo '<p style="width: 18rem;" class="bg-danger rounded-2 mx-auto mt-3 p-1 text-center">ID: ' . $row2['id_clientes'] . ' | Nome: ' . $row2['nome'] . '</p>';
        }

        while ($row = mysqli_fetch_assoc($query_valor_cesta2)) {
            echo '<p id="valor_cesta" hidden>' . $row['valor_cesta'] . '</p>';
        }
        ?>

        <form method="POST">
            <select class="form-select mx-auto mt-3 text-center" onchange="gerar()" name="metodo_pagamento" id="metodo_pagamento" style="width: 18rem;" aria-label="Default select example">
                <option selected>Escolha a Forma de Pagamento</option>
                <?php
                while ($row = mysqli_fetch_assoc($query_valor_cesta)) {
                    echo '<option value="1">1x de R$ ' . number_format($row['valor_cesta'], 2, ',', '.') . '</option>';
                    echo '<option value="2">2x de R$ ' . number_format($row['valor_cesta_2'], 2, ',', '.') . '</option>';
                    echo '<option value="3">3x de R$ ' . number_format($row['valor_cesta_3'], 2, ',', '.') . '</option>';
                    echo '<option value="4">4x de R$ ' . number_format($row['valor_cesta_4'], 2, ',', '.') . '</option>';
                }
                ?>
            </select>

            <div class="mb-3" id="receba_"></div>
            <div class="mb-3" id="receba_2"></div>
            <div class="mb-3" id="receba_3"></div>
            <div class="mb-3" id="receba_4"></div>

            <div class="text-center">
                <button class="btn btn-primary mt-3" id="btn">Concluir</button>
            </div>
        </form>

        <table class="table table-hover text-white mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">ID da Venda</th>
                    <th scope="col">Data da Venda</th>
                    <th scope="col">Forma de Pagamento</th>
                    <th scope="col">Valor Cesta</th>
                    <th scope="col">Datas/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query_table)) {
                    echo '<tr>';

                    echo '<th>' . $row['id_vendas'] . '</th>';
                    echo '<th>' . date("d/m/Y", strtotime($row['data_venda'])) . '</th>';
                    echo '<th>' . $row['id_metodo_pagamento'] . ' x</th>';
                    echo '<th>R$ ' . number_format($row['valor_cesta'], 2, ",", ".") . '</th>';
                    echo '<th>';
                    echo '<a href="datas.php?idv=' . $row['id_vendas'] . '&id=' . $row['id_clientes'] . '"><i class="fa-solid fa-floppy-disk fs-4 primary"></i></a>';
                    echo '</th>';

                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php include_once("includes/scripts.php"); ?>

    <script>
        $(document).ready(function() {
            gerar = function() {
                if ($('#metodo_pagamento').val() == '1') {
                    $('#receba_').html('<input type="date" id="data" class="form-control mx-auto my-3 text-center" style="width: 18rem;">');
                } else if ($('#metodo_pagamento').val() == '2') {
                    $('#receba_2').html('<input type="date" id="data" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_2" class="form-control mx-auto my-3 text-center" style="width: 18rem;">');
                } else if ($('#metodo_pagamento').val() == '3') {
                    $('#receba_3').html('<input type="date" id="data" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_2" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_3" class="form-control mx-auto my-3 text-center" style="width: 18rem;">');
                } else {
                    $('#receba_4').html('<input type="date" id="data" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_2" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_3" class="form-control mx-auto my-3 text-center" style="width: 18rem;">' +
                        '<input type="date" id="data_4" class="form-control mx-auto my-3 text-center" style="width: 18rem;">');
                }
            }

            $("#btn").click(function() {
                let $mtd = $('#metodo_pagamento').val();
                let $data = $("#data").val();
                let $data_2 = $("#data_2").val();
                let $data_3 = $("#data_3").val();
                let $data_4 = $("#data_4").val();
                let $id = $("#id_cli").text();
                let $valor_cesta = $("#valor_cesta").text();

                $.ajax({
                    url: "ajax/insert_datas.php",
                    type: "GET",
                    data: {
                        data: $data,
                        data_2: $data_2,
                        data_3: $data_3,
                        data_4: $data_4,
                        id: $id,
                        valor_cesta: $valor_cesta,
                        mtd: $mtd,
                    },
                    dataType: "json",
                    success: function(dados, status) {
                        location.href = "vendas_datas.php?id=" + $id + "";
                    },
                    error: function(dados, status) {
                        alert(status)
                    }
                });

            });
        })
    </script>
</body>

</html>