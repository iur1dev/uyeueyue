<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);

if (isset($_SESSION['valor_cesta'])) {
    echo '<div class="alert alert-success fw-bold text-center" role="alert">Preço Atualizado !</div>';
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="btn_logout">
        <div class="bg-danger rounded-2 p-2">
            <a href="huehue.php" class="text-decoration-none text-white">Sair</a>
        </div>
    </div>

    <div class="container_principal">
        <div class="bg-danger p-3 rounded-3">
            <a href="cadastrar.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-address-card tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Cadastrar</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="clientes.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-magnifying-glass tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Clientes</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="relatorios.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-paste tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Relatórios</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="estoque.php" class="text-center text-decoration-none font_snow">
                <i class="fa-sharp fa-solid fa-warehouse tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Estoque</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="configuracoes.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-gear tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Configurações</span><br>
            </a>
        </div>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>