<?php
function getProducts($connection, $category)
{
  $sql_books = "SELECT title,image,cost,product_id FROM libro WHERE category_id=$1";
  //$consulta_books = pg_query($connexio, $sql_books) or die("Error sql categoria");
  $products_consult = pg_query_params($connection, $sql_books, array($category));
  $products_list = pg_fetch_all($products_consult);
  return ($products_list);
}
?>