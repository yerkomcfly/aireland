<?php
    $conexion = new mysqli("localhost","root","","pruebas");
    if(!$conexion)
    {
        echo "Falló en la conexión";
    }
?>