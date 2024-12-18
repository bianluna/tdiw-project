<?php
function findProduct($connexio, $product_id)
{
  //print('enters here - model');
  //$sql_product = "SELECT title, cost, description, product_id, editorial, author, isbn, image FROM libro WHERE product_id=$1";
  $sql_product = "SELECT * FROM libro WHERE product_id=$1";

  $product_consult = pg_query_params($connexio, $sql_product, array($product_id));
  $product_data = pg_fetch_all($product_consult);

  return ($product_data[0]);
}
?>