<?php

require_once "../model/conexion.php";
if(isset($_GET["id"])){
$id = $_GET["id"];
echo "id recibido ".$id;
$query = "DELETE FROM ofertas WHERE id = $id";
                
                $consulta = $conexion->prepare($query);
                // $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                header("Location: ../views/agregaroferta.php");
}else{
    echo "no hay id";
}
?>