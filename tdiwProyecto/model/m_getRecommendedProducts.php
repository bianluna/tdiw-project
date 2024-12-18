<?php
function getRecommendedProducts($connection)
{
    $sql_recommended_books = "SELECT title,image,cost,product_id FROM libro WHERE recomendation=TRUE";
    //$consulta_books = pg_query($connexio, $sql_books) or die("Error sql categoria");
    $recommended_consult = pg_query($connection, $sql_recommended_books) or die("Error sql consulta");
    $recommended_list = pg_fetch_all($recommended_consult);
    return ($recommended_list);
}
?>