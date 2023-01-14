<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

$nome_pag = "Relatórios";

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
    <div class="container_principal">
        <div class="bg-danger p-3 rounded-3">
            <a href="home.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-rotate-left tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Voltar para Home</span><br>
            </a>
            <br>
            <a href="valor_estoque.php" class="text-center text-decoration-none font_snow">
                <i class="fa-sharp fa-solid fa-warehouse tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Valor de Estoque</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="clientes.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-magnifying-glass tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;teste</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="relatorios.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-paste tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;teste</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="estoque.php" class="text-center text-decoration-none font_snow">
                <i class="fa-sharp fa-solid fa-warehouse tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;teste</span><br>
            </a>
            <hr class="border border-white border-2">
            <a href="configuracoes.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-gear tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;teste</span><br>
            </a>
        </div>
    </div>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>