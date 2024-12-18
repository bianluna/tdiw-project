<?php
function findCategory($connection)
{
  $sql_cat = "SELECT tipo, id_categoria FROM categorias";
  $consulta_categorias = pg_query($connection, $sql_cat) or die("Error sql categorias");
  $resultado_categorias = pg_fetch_all($consulta_categorias);

  return ($resultado_categorias);

}
?>