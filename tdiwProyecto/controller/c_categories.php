<?php

require_once __DIR__ . '/../model/conectarBD.php';
require_once __DIR__ . '/../model/m_getCategory.php';
$connection = conectarBD();

$resultado_categorias = findCategory($connection); // Aquesta crida és al model

include __DIR__ . '/../views/v_categoryList.php';
pg_close($connection);
?>