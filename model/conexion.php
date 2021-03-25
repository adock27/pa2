<?php

// establecemos los parametros de mi conexion a base de datos
$dbname = "test_pa3";
$user = "root";
$password = "";

try {
    $ruta = "mysql:host=localhost;dbname=$dbname";
    $conexion = new PDO($ruta, $user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}


?>