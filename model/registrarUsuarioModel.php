<!-- REGISTRAR USUARIO MODELO -->
<?php

require_once "../model/conexion.php";

$id = "";
$correo = $_POST['correo'];
$pass = $_POST['password'];

$consulta = $conexion->prepare("INSERT INTO user(id,correo,pass) values (:id,:correo,:pass)");

$consulta->bindParam(':id', $id, PDO::PARAM_INT);
$consulta->bindParam(':correo', $correo, PDO::PARAM_STR);
$consulta->bindParam(':pass', $pass, PDO::PARAM_STR);

include("../views/header.php");
if ($consulta->execute()) {
	echo "Insertado correctamente";
	echo '<a class="btn btn-primary" href="../index.php">regresar</a>';
} else {
	echo "Este usuario ya se encuentra registrado";
	echo '<a class="btn btn-primary" href="../views/registro.php">regresar</a>';
}

?>