<?php
// conexion base de datos
// datos
$host="localhost";
$bd="tienda";
$usuario="root";
$contrasenia="";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
    if ($conexion) {echo "CONECTADO A LA BASE DE DATOS";} 

    }catch (Exception $e) {

    echo '----- Excepción capturada:--  ',  $e->getMessage(), "\n";
}
?>