<?php
include("../includes/conn.php");
header('Content-Type: application/json');

if (isset($_GET['data'])) {
    $data = $_GET['data'];
} else {
    $data = "";
}

if (isset($_GET['data_2'])) {
    $data_2 = $_GET['data_2'];
} else {
    $data_2 = "";
}

if (isset($_GET['data_3'])) {
    $data_3 = $_GET['data_3'];
} else {
    $data_3 = "";
}

if (isset($_GET['data_4'])) {
    $data_4 = $_GET['data_4'];
} else {
    $data_4 = "";
}

$id = $_GET['id'];
$valor_cesta = $_GET['valor_cesta'];
$mtd = $_GET['mtd'];

$sql = "INSERT INTO vendas (id_clientes, id_metodo_pagamento, valor_cesta, data_1_parcela, data_2_parcela, data_3_parcela, data_4_parcela) 
    VALUE ('$id', '$mtd', '$valor_cesta', '$data', '$data_2', '$data_3', '$data_4')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('ok');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
