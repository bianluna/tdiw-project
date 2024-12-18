<?php
// controller/saveUser.php

require_once __DIR__ . '/../model/conectarBD.php';
require_once __DIR__ . '/../model/m_saveUserInDB.php';

$conexion = conectarBD();

// Recoger los datos del formulario
$name = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['direccion'];
$telephone = $_POST['telephone'];
$city = $_POST['poblacion'];
$postalcode = $_POST['codigo_postal'];

// Mostrar datos para depuración (opcional, eliminar en producción)
echo "Nombre: $name, Correo: $email<br>";

// Insertar usuario en la base de datos
$result_insert = saveUserInDB($conexion, $name, $email, $password, $address,  $city, $postalcode, $telephone);
echo "<script>alert('Cuenta creada con éxito');</script>";
// Mostrar resultado de la inserción (opcional, eliminar en producción)
echo "Resultado de la inserción: ";
print_r($result_insert);



// Cerrar conexión
pg_close($conexion);

?>
