<!-- AGREGAR USUARIO MODELO -->
<?php
require_once "../model/conexion.php";
session_start();
$id = "";
$prestatario =  $_SESSION['id'];;
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];


$consulta = $conexion->prepare("INSERT INTO ofertas(prestatario,titulo,descripcion) values (:prestatario,:titulo,:descripcion)");

$consulta->bindParam(':prestatario', $prestatario, PDO::PARAM_INT);
$consulta->bindParam(':titulo', $titulo, PDO::PARAM_STR);
$consulta->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);

if ($consulta->execute()) {
    $_SESSION["notificacion"] = "Oferta agregada correctamente";
    header("Location: ../views/agregaroferta.php");
} else {
	echo "No se pudo agregar oferta";
	echo '<a class="btn btn-primary" href="../views/agregaroferta.php">regresar</a>';
}


?>