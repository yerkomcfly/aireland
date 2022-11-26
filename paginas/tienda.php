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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body id="body_tienda">
    <header>
        <!--nav1-->
            <nav id="fondo_header" class="nav2 pt-3 pb-3">
                <ul id="" class="p-0 m-0 d-flex">
                    <div class="col-4 d-flex justify-content-center">
                        <li id="" class="nav-item my-2 px-0 ">
                        <a href="../index.php"><img src="../imagenes/logo.svg" alt="logo" id="logo"></a>                   
                        </li>
                    </div>
                    <div class="col  align-self-end pb-3">
                        <li id="" class="nav-item my-2 px-0 columnas_header ">                   
                            <a id="" class="btn w-100 py-1 botones_nav" href="../index.php" role="button"><h5 id="text_botones_nav">INICIO</h5></a>
                        </li>
                    </div>
                    <div class="col align-self-end pb-3">
                        <li id="seccion_tienda" class="nav-item my-2 px-0 columnas_header">                   
                        <a id="boton_tienda" class="btn w-100 py-1 botones_nav" href="./tienda.php" role="button"><h5 id="text_botones_nav">TIENDA</h5></a>
                        </li>
                    </div>

                    <div class="col align-self-end pb-3">
                        <li id="" class="nav-item my-2 px-0 columnas_header">                   
                            <a id="" class="btn w-100 py-1 botones_nav" href="./cotizar.html" role="button"><h5 id="text_botones_nav">COTIZAR</h5></a>
                        </li>
                    </div>
                    <div class="col  align-self-end pb-3">
                        <li id="" class="nav-item my-2 px-0 ">                   
                            <a id="" class="btn w-100 py-1 botones_nav" href="./contacto.html" role="button"><h5 id="text_botones_nav">CONTACTO</h5></a>
                        </li>
                    </div>
                    <div class="col-4 "></div>      
                </ul> 
            </nav>  
        <!--nav1-->
  </header>

  <main>
    
    <div  id="" class="container container_tienda f-blanco">
    <!--INFO NAVEGACION-->    
        <div class="row p-0 m-0 mt-2 w-100 ">
            <div class="row p-0 m-0 mx-3">
                <h6 class="montserrat bold-6 center-text m-0 p-0 pt-2 c-gris ">
                    <a href="../index.php" class="text-decoration-none c-gris text-info-nav">Inicio</a>
                    <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;"> 
                    <a href="./tienda.php" class="text-decoration-none c-gris text-info-nav">Tienda</a>
                </h6>
            </div>
        </div>
    <!--INFO NAVEGACION--> 
    <!--FILTRO-->
        <div class="col-3">     
        <div id="menu-filtros" class="card mt-2 me-2 border-0 rounded-0">
            <div class="row p-0 m-0">
                <div class="card-body ">
                <h6 class="montserrat bold-7 mb-3">Filtro:</h6>    
                <div class="row border-bottom m-0 pb-3 ">
                    <div class="input-group p-0">
                        <div class="row rounded-2 w-100 borde-animado p-0 m-0 f-gris">
                            <div class="col-1 px-2 py-2">
                            <img src="../imagenes/search.svg" alt="" style="width: 25px;">  
                            </div>
                            <div class="col px-3 pt-2 center-text">
                            <input class=" border-0 w-100 montserrat f-gris" type="text" id="buscar" placeholder="Buscar">   
                            </div>
                            
                        </div>
                    </div>
                </div>   
                </div>
            </div>
            <form action="../PHP/filtro.php" method="post">
            <div class="row px-4 m-0 mx-3 mt-4">
                <h6 class="montserrat bold-7 mb-3 p-0">Tipo</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="onoff" id="On/Off">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                        On/Off
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="inverter" id="Inverter">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                        Inverter
                    </label>
                </div>
            </div>
            <div class="row px-4 m-0 mx-3 mt-4">
                <h6 class="montserrat bold-7 mb-3 p-0">Marca</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="kendal" id="Kendal">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="Kendal">
                        Kendal
                    </label>
                    </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="akl" id="AKL">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="AKL">
                        AKL
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="heinsense" id="Heinsense">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="Heinsense">
                        Heinsense
                    </label>
                </div>
            </div>
            <div class="row px-4 m-0 mx-3 mt-4 pb-4 border-bottom">
                <h6 class="montserrat bold-7 mb-3 p-0">BTU</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="c9000" id="9000">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                        9.000
                    </label>
                    </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="c12000" id="12000">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                        12.000
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="c18000" id="18000">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                        18.000
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="c24000" id="24000">
                    <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                        24.000
                    </label>
                </div>
            </div>
            <div class="row ps-4 m-0 mx-3 mt-4 pb-4 border-bottom ">
                <h6 class="montserrat bold-7 mb-3 p-0">Etiquetas</h6>
                   <div class="col-6  p-0 px-1">
                    <a href="./tienda.php?id=algo" type="submit" class="boton4 w-100 text-center montserrat p-2  mt-2 bold-6 c-celeste position-relative" type="">Inverter <span class="material-symbols-outlined" style="font-size: 20px; position:absolute; top: 24%; left:79%;">close</span></a>  
                     
                    </div>
                    <div class="col-6  px-1">
                    <a href="./tienda.php?id=algo" type="submit" class="boton4 w-100 text-center montserrat p-2  mt-2 bold-6 c-celeste position-relative" type="">12.000 <span class="material-symbols-outlined" style="font-size: 20px; position:absolute; top: 24%; left:79%;">close</span></a>   
                    </div> 
                    <div class="col-6  px-1">
                    <a href="./tienda.php?id=algo" type="submit" class="boton4 w-100 text-center montserrat p-2  mt-2 bold-6 c-celeste position-relative" type="">AKL <span class="material-symbols-outlined" style="font-size: 20px; position:absolute; top: 24%; left:79%;">close</span></a>   
                    </div>
               
                
                
            </div>
            <div class="row m-0 mt-4 d-flex justify-content-center">
                <button type="submit" class="btn boton3 mt-2 mb-4 montserrat border-0 text-white bold-5" name="enviar">Filtrar</button>
                
            </div> 
            </form>
        </div>
        </div>
    <!--FILTRO--> 
    <!--PRODUCTOS-->   
        <div class="col-9 " style="height: 900px;">
        <div class="card my-2 p-0 h-100 border-0 rounded-0">
            <div class="card-body ">
                <div id="" class="row m-0 p-0 ">
                        <?php
                            include ("../PHP/conexion.php");
                            $query = "SELECT * FROM productos";
                            $resultado = $conexion->query($query);
                            while ($row = $resultado->fetch_assoc())
                            {
                                $id_imagen = $row['id_imagen'];
                                $query2 = "SELECT * FROM imagenes WHERE $id_imagen";
                                $resultado2 = $conexion->query($query2);
                                $row2 = $resultado2->fetch_assoc();
                        ?>
                        <div class="col-4 card_productos">
                            <div class="card  mb-5 p-0 border-0 shadow-sm">
                                <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen'])?>" class="card-img-top " alt="..." >
                                <div class="card-body">
                                    <h5 class="card-title montserrat bold-6"><?php echo $row['nombre_producto']?></h5>
                                    <p class="card-text montserrat bold-5">9000 BTU/h</p>
                                    <h5 class="montserrat bold-6 mt-3 mb-4">$450.000</h5>
                                    <a href="./producto.php?id=<?php echo $row['id_producto'];?>" class=" boton2  position-absolute top-100 start-50 translate-middle" style="width: 150px; height: 40px;">
                                        <h6 class="montserrat text-white text-center bold-5 pt-2 center-text border-0">Ver más +</h6>
                                    </a>
                                </div>
                            </div>
                        </div>    
                        <?php        
                            }
                        ?>
                </div>
            </div>
        </div>
        </div>
    <!--PRODUCTOS-->     
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
  <script type="module" src="../public/procedimientos.js"></script>
</body>



</html>