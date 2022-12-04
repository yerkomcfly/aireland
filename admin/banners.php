<?php
session_start();
if(empty($_SESSION['rol'])) 
{
    header("location: ./login.php");
    die();  
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>AireLAND</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- border border-dark --> 
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <script src="https://kit.fontawesome.com/ac893343df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/estilo.css">
    
</head>

<body class="fd-1">
  <header>
    
    
  </header>

  <main>
    <?php  
        error_reporting(0);
        include ("../PHP/conexion.php");
        include ("../PHP/filtro.php");
        $query = "SELECT * FROM imagenes WHERE tipo_imagen='i_b'";
        $resultado = $conexion->query($query);  
    ?>
    <div class="container">
        <div class="row p-0 m-0 mt-5 pb-4 border-bottom">

            
                <div class="col-12 col-lg-8  border position-relative" style="height: 400px;">
                    <form action="../PHP/subir.php" method="post" enctype="multipart/form-data">
                        <span class="material-symbols-outlined position-absolute top-50 start-50 translate-middle text-white" style="font-size:60px;">add_photo_alternate</span>
                    <input type="file" class="border w-100 h-100" id="" name="i_b" accept="image/*" style="opacity: 50%;">          
                </div>
                <div class="col d-flex align-items-center px-4">
                    <button class="btn f-celeste montserrat text-white bold-6" type="submit">Subir</button> 
                    <p class="text-white montserrat m-4">(Resolución recomendada: Altura = 700px Ancho: 2048px)</p>
                </div>
            </form>
        </div>
        <?php 
            while ($row = $resultado->fetch_assoc())
            {
        ?>
                <div class="row p-0 m-0">
                    <div class="col-8 p-0 m-0 mt-4" style="">
                        <img src="data:image/*;base64,<?php echo base64_encode($row['imagen']) ?>" alt="..." class="w-100 h-100">
                    </div>
                    <div class="col-4 p-0 m-0 d-flex align-items-center px-4">
                        <a class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1" href="../PHP/eliminar.php?id_imagen=<?php echo $row['id_imagen']?>&&op=3">
                            <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                        </a>
                    </div>
                </div>
        <?php 
            }
        ?>
    </div>



     






















  </main>
  <footer> 
  </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
    <script src="../public/busqueda.js"></script>

</body>




</html>