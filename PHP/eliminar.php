<?php

session_start();
if ($_SESSION ["rol"] == "admin")
{
    include ("conexion.php");
    echo $_SESSION ["rol"]."\n";
    echo "entro\n";
    $id = $_GET['id'];
    echo $id;

    $query = "DELETE FROM imagenes WHERE id = $id";
    $resultado = $conexion->query($query);
    if (!$resultado)
        echo "Error";

}
session_destroy();   



header("Location: ../paginas/admin.php" );
?>