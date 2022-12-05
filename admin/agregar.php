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
    <button id="btn_h3" class="btn position-fixed text-white m-4 f-gris2" style="z-index:5; font-size:25px;"><i class="fa-solid fa-bars"></i></button>
    <div id="menu3" class="p-0 m-0 pt-5 f-gris2 vh-100 m3 display-none">
                    <div class="row p-0 m-0  px-4 mt-5 pt-5">
                        <a href="./productos.php" class="h-1 decoration-0">
                            <p class="montserrat bold-5 border-bottom">Productos</p>
                        </a>
                        
                    </div>
                    <div class="row p-0 m-0  px-4 mt-2">
                        <a href="./banners.php" class="h-1 decoration-0">
                            <p class="montserrat bold-5 border-bottom">Banners</p>
                        </a>
                    </div>               
                    <div class="row w-100 p-0 m-0 px-4 mb-3  position-absolute bottom-0 start-0">
                        <a href="../PHP/cerrar_sesion.php" class="h-1 decoration-0 ">
                            <p class="montserrat bold-5">Cerrar Sesión <i class="fa-solid fa-right-from-bracket ms-1"></i></p>
                        </a>
                    </div>
            </div>
    
</header>

  <main>
    <?php  
        //error_reporting(0);
        include ("../PHP/conexion.php");
        //include ("../PHP/filtro.php");
        
    ?>
    <div class="container pt-5">
        <div class="row p-0 m-0 py-5">
            <div class="col-12 col-lg-6">
                <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Imagen de portada</p>

                <form id="edit_admin" action="../PHP/subir.php" method="POST" enctype="multipart/form-data">
                <input type="file" class="form-control" id="inputGroupFile01" name="i_p" accept="image/*" required>
            </div>
            <div class="col-12 col-lg-6 pt-2">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Imagenes secundarias</p>

              <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
              <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
              <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
              <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
            </div>      
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">SKU</p>

              <input class="form-control" name="sku" type="text" placeholder="sku" required>
            </div> 
            <div class="col-8 col-lg-3 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Nombre</p>
              <input class="form-control"  name="nombre_producto" type="text" placeholder="nombre_producto">
            </div>
            <div class="col-8 col-lg-3 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Subtitulo</p>
              <input class="form-control" name="subtitulo" type="text" placeholder="subtitulo">
            </div>
            <div class="col-4 col-lg-2 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">$ Precio</p>
              <input class="form-control" name="precio" type="text" placeholder="precio">
            </div>
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">BTU</p>
              <select  name="btu" class="form-control" aria-label="Default select example"> 
                <option selected>BTU</option>
                <option value="9000">9000</option>
                <option value="12000">12000</option>
                <option value="18000">18000</option>
                <option value="24000">24000</option>
              </select>
            </div>       
            <div class="col-4 col-lg-2 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Tipo</p>
                <select name="tipo_producto" class="form-control" aria-label="Default select example">  
                                <option  selected>Tipo de producto</option>
                                <option  value="onoff">ON/OFF</option>
                                <option  value="inverter">Inverter</option>
                            </select>
            </div>  
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Marca</p>
              <select name="id_marca" class="form-control" aria-label="Default select example">
                                <option  selected>Marca</option>
                                <option  value="1">Kendal</option>
                                <option  value="2">AKL</option>
                                <option  value="3">Heinsense</option>
                            </select>
            </div>
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Color</p>
              <select name="color" class="form-control" aria-label="Default select example">
                                <option  selected>Color</option>
                                <option  value="blanco">Blanco</option>
                                <option  value="negro">Negro</option>
                            </select>
            </div>
            <div class="col-12 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Descripción</p>
              <textarea class="form-control" name="descripcion" type="text" placeholder="descripcion"></textarea>
            </div>              
            <div class="col-12 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Información adicional</p>
              <textarea class="form-control" name="info_adicional" type="text" placeholder="info_adicional"></textarea>
            </div>
             <div class="col-12 p-0 m-0 px-2 mt-3">
              <button class="btn montserrat text-white f-celeste" type="submit" name="guardar">Subir</button>

            </div>               
                </form>

          
        </div>
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
    <script src="../public/procedimientos2.js"></script>
    <script src="../public/menu_m_admin.js"></script>

</body>




</html>