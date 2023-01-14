<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);

$nome_pag = "Atualizar Cadastros";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$sql = "select * from clientes where '$id' = id_clientes";
$query = $conn->query($sql) or die("select * from clientes where id = id_clientes" . $conn->error);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $empresa = $_POST['empresa'];
    $cep_empresa = $_POST['cep_empresa'];
    $cidade_empresa = $_POST['cidade_empresa'];
    $bairro_empresa = $_POST['bairro_empresa'];
    $rua_empresa = $_POST['rua_empresa'];
    $numero_empresa = $_POST['numero_empresa'];

    $sql_update = "update clientes set nome = '$nome', cpf = '$cpf', rg = '$rg', data_nascimento = '$data_nascimento',
     celular = '$celular', cep = '$cep', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero',
     empresa = '$empresa', cep_empresa = '$cep_empresa', cidade_empresa = '$cidade_empresa', bairro_empresa = '$bairro_empresa', rua_empresa = '$rua_empresa', numero_empresa = '$numero_empresa' where '$id' = id_clientes";
    $query_update = $conn->query($sql_update) or die('erro update ' .  $conn->error);

    $_SESSION['atualizado'] = $query_update;

    header('Location: clientes.php');
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
        <div class="row bg-danger rounded-2">
            <a href="clientes.php" class="col-3">
                <i class="fa-regular fa-circle-left mt-3" style="font-size: 3.5rem;color: snow;">
                </i>
            </a>
            <h1 class="fw-bold text-center my-3 col-6"><?php echo $nome_pag ?></h1>
            <div class="col-3"></div>
        </div>
        <form method="POST">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                echo "<h1 class='fw-bold text-center my-3'>Dados Pessoais</h1>";
                echo "<label for='nome' class='form-label'>Nome</label><input class='form-control mb-3' name='nome' id='nome' placeholder='Nome' type='text' value='" . $row['nome'] . "'>";
                echo "<label for='cpf' class='form-label'>CPF</label><input class='form-control mb-3' name='cpf' id='cpf' placeholder='Cpf' type='text' value='" . $row['cpf'] . "'>";
                echo "<label for='rg' class='form-label'>RG</label><input class='form-control mb-3' name='rg' id='rg' placeholder='RG' type='text' value='" . $row['rg'] . "'>";
                echo "<label for='data_nascimento' class='form-label'>Data de Nascimento</label><input class='form-control mb-3' name='data_nascimento' id='data_nascimento' placeholder='Data de Nascimento' type='text' value='" . $row['data_nascimento'] . "'>";
                echo "<label for='celular' class='form-label'>Celular</label><input class='form-control mb-3' name='celular' id='celular' placeholder='Celular' type='text' value='" . $row['celular'] . "'>";
                echo "<h1 class='fw-bold text-center my-3'>Endereço Residencia</h1>";
                echo "<label for='cep' class='form-label'>Cep</label><input class='form-control mb-3' name='cep' id='cep' placeholder='CEP' type='text' value='" . $row['cep'] . "'>";
                echo "<label for='cidade' class='form-label'>Cidade</label><input class='form-control mb-3' name='cidade' id='cidade' placeholder='Cidade' type='text' value='" . $row['cidade'] . "'>";
                echo "<label for='bairro' class='form-label'>Bairro</label><input class='form-control mb-3' name='bairro' id='bairro' placeholder='Bairro' type='text' value='" . $row['bairro'] . "'>";
                echo "<label for='rua' class='form-label'>Rua</label><input class='form-control mb-3' name='rua' id='rua' placeholder='Rua' type='text' value='" . $row['rua'] . "'>";
                echo "<label for='numero' class='form-label'>Número</label><input class='form-control mb-3' name='numero' id='numero' placeholder='Número' type='text' value='" . $row['numero'] . "'>";
                echo "<h1 class='fw-bold text-center my-3'>Endereço do Trabalho</h1>";
                echo "<label for='empresa' class='form-label'>Empresa</label><input class='form-control mb-3' name='empresa' id='empresa' placeholder='Empresa' type='text' value='" . $row['empresa'] . "'>";
                echo "<label for='cep_empresa' class='form-label'>Cep</label><input class='form-control mb-3' name='cep_empresa' id='cep_empresa' placeholder='CEP' type='text' value='" . $row['cep_empresa'] . "'>";
                echo "<label for='cidade_empresa' class='form-label'>Cidade</label><input class='form-control mb-3' name='cidade_empresa' id='cidade_empresa' placeholder='Cidade' type='text' value='" . $row['cidade_empresa'] . "'>";
                echo "<label for='bairro_empresa' class='form-label'>Bairro</label><input class='form-control mb-3' name='bairro_empresa' id='bairro_empresa' placeholder='Bairro' type='text' value='" . $row['bairro_empresa'] . "'>";
                echo "<label for='rua_empresa' class='form-label'>Rua</label><input class='form-control mb-3' name='rua_empresa' id='rua_empresa' placeholder='Rua' type='text' value='" . $row['rua_empresa'] . "'>";
                echo "<label for='numero_empresa' class='form-label'>Número</label><input class='form-control mb-3' name='numero_empresa' id='numero_empresa' placeholder='Número' type='text' value='" . $row['numero_empresa'] . "'>";
                echo "<h1 class='fw-bold text-center my-3'>Informações</h1>";
                echo "<label for='data_update' class='form-label'>Última Atualização de Cadastro</label><input class='form-control mb-3' id='data_update' type='text' readonly value='" . ($row['data_update'] ? date('d/m/Y', strtotime($row['data_update'])) : "") . "'>";
                echo "<label for='data_cadastro' class='form-label'>Criente desde</label><input class='form-control mb-3' id='data_cadastro' type='text' readonly value='" . date('d/m/Y', strtotime($row['data_cadastro'])) . "'>";
            }
            ?>
            <div class="text-center">
                <button class="btn btn-success mb-5" type="submit">Atualizar</button>
            </div>
        </form>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>