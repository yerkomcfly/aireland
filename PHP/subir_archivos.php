<?php
    session_start();
    if ($_SESSION ["rol"] == "admin")
    {

        include("conexion.php");

        $nombre = $_POST['nombre'];
        $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

        $query = "INSERT INTO imagenes (nombre,imagen) VALUES ('$nombre','$archivo')";
        $resultado = $conexion->query($query);

        if ($resultado)
        {
            echo "\nSubido correctamente";
        }
        else
        {
            echo "\nFallo en la subida";
        }
    }
    session_destroy();   
    header("Location: ../paginas/admin.php" );

?>