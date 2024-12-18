<?php
// controller/recommendedProducts.php

require_once __DIR__ . '/../model/conectarBD.php';
require_once __DIR__ . '/../model/m_getRecommendedProducts.php';

$connection = conectarBD();

$recommended_list = getRecommendedProducts($connection);

include __DIR__ . '/../views/v_productsByRecommendation.php';
pg_close($conexion);

?>