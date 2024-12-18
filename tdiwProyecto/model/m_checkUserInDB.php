<?php
function checkUserInDB($connexio, $email)
{
    $sql_email = "SELECT email FROM users WHERE email='$email'";
    //print("SQL Query: " . $sql_email . "\n");
    $consulta_email = pg_query($connexio, $sql_email);
    

    // Fetch rows
    $resultat_email = pg_fetch_all($consulta_email);
    //print("result consulta: ".$resultat_email."");


    return ($resultat_email); 
  }
?>

