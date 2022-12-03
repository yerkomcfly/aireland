<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';



if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: ../paginas/contacto.html" );
}
if (isset ($_POST['enviar']))
{
    $op = $_GET['op'];
    


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        if ($op == "1")
        {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $archivos = $_FILES['archivos'];
            $nombre_archivos = $archivos['name'];
            $ruta_archivos = $archivos['tmp_name'];
        
            //Recipients
            $mail->setFrom($correo,'COTIZACION');
            $mail->addAddress('yerkomcfly@gmail.com');               //Name is optional

            //Attachments
            
            $i = 0;
            foreach ($ruta_archivos as $rutas_archivos) {
            $mail->AddAttachment($rutas_archivos,$nombre_archivos[$i]);
            $i++;
            }
            
        
           
            

            //Content
            $mail->isHTML(true);
            $mail->Subject = "COTIZACION: $nombre, Telefono: $telefono";
            $mail->Body    = 'Necesito una cotización!';
    
            $mail->send();
            echo 'Message has been sent';
            header("Location: ../paginas/cotizar.php");
        }

        else if ($op == "2")
        {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $consulta = $_POST['consulta'];
            //Recipients
            $mail->setFrom($correo,'CONTACTO');
            $mail->addAddress('yerkomcfly@gmail.com');               //Name is optional
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "CONTACTO: $nombre, Telefono: $telefono";
            $mail->Body    = $consulta;
    
            $mail->send();
            echo 'Message has been sent';
            header("Location: ../paginas/contacto.php");

        }
        else if ($op == "3")
        {
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $nombre_producto = $_GET['nombre_producto'];
            $id = $_GET['id'];
            //Recipients
            $mail->setFrom($nombre,'LLAMAR!');
            $mail->addAddress('yerkomcfly@gmail.com');               //Name is optional
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "LLAMAR!: $nombre, Telefono: $telefono";
            $mail->Body    = $nombre_producto;
    
            $mail->send();
            echo 'Message has been sent';
            header("Location: ../paginas/producto.php?id=$id");

        }

        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
  
    
    
}

?>