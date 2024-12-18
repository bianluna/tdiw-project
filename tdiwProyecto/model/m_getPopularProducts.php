<?php
function getPopularProducts($connection)
{
    $sql_popular_books = "SELECT title,image,cost,product_id FROM libro WHERE popular=TRUE";
    //$consulta_books = pg_query($connexio, $sql_books) or die("Error sql categoria");
    $popular_consult = pg_query($connection, $sql_popular_books) or die("Error sql consulta");
    $popular_list = pg_fetch_all($popular_consult);
    return ($popular_list);
}
?>