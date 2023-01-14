<?php
include_once("includes/conn.php");
include_once("includes/protect.php");

unset($_SESSION['atualizado']);
unset($_SESSION['venda']);
unset($_SESSION['excluido']);
unset($_SESSION['valor_cesta']);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <?php include_once("includes/head.php") ?>
</head>

<body>
    <div class="container_principal">
        <div class="bg-danger p-3 rounded-3">
            <a href="home.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-rotate-left tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Voltar para Home</span><br>
            </a>
            <br>
            <a href="preco_cesta.php" class="text-center text-decoration-none font_snow">
                <i class="fa-solid fa-tag tamanho_icone_home"></i><span class="fs-2 fw-bold">&nbsp;&nbsp;Preço da Cesta</span><br>
            </a>
        </div>
    </div>
    <?php include_once("includes/scripts.php") ?>
</body>

</html>