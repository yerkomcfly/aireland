<?php

session_start();
if ($_SESSION ["rol"] == "admin")
{
    include ("conexion.php");
    echo $_SESSION ["rol"]."\n";
    echo $_SESSION ["id"]."\n";
    
    $nombre = $_POST['nombre'];
    echo $nombre;


    /*
    $query = "UPDATE imagenes SET nombre =  WHERE id = ";
    $resultado = $conexion->query($query);
    if (!$resultado)
        echo "Error";
    */
}
/*
session_destroy();   

header("Location: ../paginas/admin.php" );*/
?>