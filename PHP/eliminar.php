<?php

session_start();
if ($_SESSION ["rol"] == "admin")
{
    include ("conexion.php");
    echo $_SESSION ["rol"]."\n";
    echo "entro\n";



    $id = $_GET['id'];
    echo $id;

    $query = "DELETE FROM productos WHERE id_producto = $id";
    $resultado = $conexion->query($query);

    $query = "DELETE FROM imagenes WHERE id_imagen = $id";
    $resultado = $conexion->query($query);
    if (!$resultado)
        echo "Error";

}
session_destroy();   
header("Location: ../paginas/admin.php" );
?>