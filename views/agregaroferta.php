<?php

require "../model/conexion.php";
session_start();
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

<div class="row">
    <div class="col-md-4">

        <div class="card-body">
            <label class="mb-2">Agregar oferta final 1</label>
            <form action="../model/agregarOfertaModel.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Titulo" required>
                </div>
                <div class="form-group mt-2">
                    <textarea name="descripcion" class="form-control" rows="2" placeholder="Descripcion" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Agregar</button>

            </form>
            <?php if (isset($_SESSION["notificacion"])) {
            } ?>
            <?php echo $_SESSION["notificacion"] ?>
            <?php session_unset("notificacion") ?>
        </div>

    </div>
    <div class="col">
        Mis ofertas
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM ofertas";
                // $resultados = mysqli_query($conexion, $query);
                $consulta = $conexion->prepare($query);
                // $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                if ($consulta->rowCount() > 0) {
                    // traigo el dato
                    while ($row = $consulta->fetch()) { ?>
                        <tr>
                            <td><?php echo $row["titulo"] ?></td>
                            <td><?php echo $row["descripcion"] ?></td>
                            <td>
                                <a href="editar.php?<?php echo $row["id"] ?>">Editar</a>
                                <a href="../model/eliminarOfertaModel.php?id=<?php echo $row["id"] ?>">Eliminar</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo " <h3>no hay datos</h3>";
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php include("footer.php"); ?>