<?php
// controller/c_checkEmail.php

require_once __DIR__ . '/../model/conectarBD.php';
require_once __DIR__ . '/../model/m_checkUserInDB.php';
$email = $_GET["email"];
//print_r($email);


$conexion = conectarBD();

$result_user = checkUserInDB($conexion, $email);
//print_r($result_user);

if ($result_user){
    echo json_encode(true);
}
else{
    echo json_encode(false);
} 


//return($result_user);
//include_once __DIR__ .'../views/v_login.php';

//echo json_encode($result_user);

?>