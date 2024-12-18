<?php


require_once __DIR__ . '/../model/conectarBD.php';
require_once __DIR__ . '/../model/m_getProduct.php';
$conexion = conectarBD();

//$product_id = $_REQUEST["product_id"];
$product_id = isset($_GET['product_id']) ? (int) $_GET['product_id'] : 1;
//print_r('enters here - controller');
//print_r($product_id);

$product = findProduct($conexion, $product_id); // Aquesta crida és al model
//print_r($product);

include __DIR__ . '/../views/v_product.php';
pg_close($conexion);
?>