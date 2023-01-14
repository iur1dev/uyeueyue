<?php
include("../includes/conn.php");
header('Content-Type: application/json');

$data = $_GET['data'];
$data_2 = $_GET['data_2'];
$data_3 = $_GET['data_3'];
$data_4 = $_GET['data_4'];
$id = $_GET['id'];
$valor_cesta = $_GET['valor_cesta'];

$sql = "INSERT INTO vendas (id_clientes, valor_cesta, data_1_parcela, data_2_parcela, data_3_parcela, data_4_parcela) 
    VALUE ('$id', '$valor_cesta', '$data', '$data_2', '$data_3', '$data_4')";

if (mysqli_query($conn, $sql)) {
    echo json_encode('ok');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
