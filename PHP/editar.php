<?php

session_start();
if ($_SESSION ["rol"] == "admin")
{
    session_destroy();   
    include ("conexion.php");
    
    $id = $_GET["id"];
    $nombre = $_POST['nombre'];

    
    $query = "UPDATE imagenes SET nombre = '$nombre'  WHERE id = $id";
    $resultado = $conexion->query($query);
    if (!$resultado)
        echo "Error";

}

   

header("Location: ../paginas/admin.php" );
?>