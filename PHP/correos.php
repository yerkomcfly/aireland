<?php

use PHPMailer\PHPMailer\PHPMailer;

if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: ../paginas/contacto.html" );
}
if (isset ($_POST['enviar']))
{
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/Exception.php';

        
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['descripcion'];
    $archivo = $_FILES['archivo'];


    $mailer = new PHPMailer();
    $mailer->setFrom($correo,$nombre);
    $mailer->addAddress('yerkomcfly@gmail.com','Sitio Web');
    $mailer->Subject = "Contacto: $nombre";
    $mailer->msgHTML ($mensaje);
    $mailer->AltBody = strip_tags($mensaje);
    $i=0;
    foreach  ($archivo as $num_archivos)
    {
      if ($archivo[$i]['size']>0)
        $mailer->addAttachment($archivo[$i]['tmp_name'], $archivo[$i]['name']); 
        $i++; 
    }

    
    $x = $mailer->send();
    
}
header("Location: ../paginas/contacto.html" );
?>