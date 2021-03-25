<?php
session_start();
require_once "conexion.php";

    $id="";
	$correo = $_POST['txtCorreo'];
	$pass = $_POST['txtPass'];

	$consulta = $conexion -> prepare("SELECT * from user where correo = :correo and pass = :pass");
    
    // especifico los tipos de datos
	$consulta -> bindParam(':correo',$correo,PDO::PARAM_STR);
	$consulta -> bindParam(':pass',$pass,PDO::PARAM_STR);

    // para el select
    $consulta -> setFetchMode(PDO::FETCH_ASSOC);

	// ejecutamos
    $consulta->execute();
	// Mostramos los resultados

    if($consulta-> rowCount() > 0){
        
        // traigo el dato
        while ($row = $consulta->fetch()){
            // echo "nombre: {$row["id"]} ----- pass: {$row["pass"]}<br>";
            
            // inicio la session 
            $_SESSION['id'] = $row["id"];
        }
        header('Location: ../views/menu.php');
    }else{
        echo " <h3>USUARIO NO ENCONTRADO</h3>";
    }

    //cerrar conexion
    $consulta->closeCursor();
    $consulta= null;

?>