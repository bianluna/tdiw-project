<?php
function getCategoryName($connexio, $categoria)
{
  $sql_category_name = "SELECT tipo FROM categorias WHERE id_categoria=$1";
  //$consulta_books = pg_query($connexio, $sql_books) or die("Error sql categoria");
  $consulta_category_name = pg_query_params($connexio, $sql_category_name, array($categoria));
  $consulta_category_name = pg_fetch_all($consulta_category_name);
  return ($consulta_category_name[0]);
}
?>