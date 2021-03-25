<?php
session_start();
// no se pero funciona
error_reporting(0); // esta linea es importante
$auxiliar = $_SESSION['id'];
if (!isset($auxiliar)) {
    header('Location: ../index.php');
}
?>

<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<nav class="nav">
  <a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="agregaroferta.php">Agregar oferta</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>

<a href="../model/cerrarsesion.php">Cerrar Sesion</a>


<?php include("footer.php"); ?>