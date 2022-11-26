<?php
    session_start();
    if ($_SESSION ["rol"] == "admin")
    {

        include("conexion.php");

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $marca= $_POST['marca'];
        $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
        $query = "INSERT INTO imagenes (id_imagen,nombre_imagen,imagen) VALUES ('$codigo','$nombre','$archivo')";
        $resultado = $conexion->query($query);
        $query = "INSERT INTO productos (id_producto,id_imagen,id_marca,nombre_producto) VALUES ('$codigo','$codigo','$codigo','$nombre')";
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