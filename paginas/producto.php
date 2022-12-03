<!doctype html>
<html lang="en">

<head>
    <title>AireLAND</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- border border-dark -->
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <script src="https://kit.fontawesome.com/ac893343df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/estilo.css">

</head>

<body id="body_tienda">
    <header>
        <div id="modal-menu-hamburger" class="vh-100 vw-100 display-none">
                <div class="row p-0 m-0 my-4">
                    
                    <span id="btn_menu_exit" type="button" class="material-symbols-outlined c-celeste-oscuro" style="font-size: 40px;">close</span> 
                
                </div>
                <div class="row  p-0 m-0 mx-5">
                    <a href="./tienda.php" class="text-center boton-nav-hamburger">
                        <h5 type="button" class="montserrat  bold-4 py-4 border-bottom">
                        <span class="material-symbols-outlined" style="position: relative; top:3px;">storefront</span> Tienda
                    </h5></a>
                    <a href="./cotizar.php" class="text-center boton-nav-hamburger">

                    <h5 type="button" class="montserrat bold-4 text-center py-4 border-bottom">
                    <span class="material-symbols-outlined" style="position: relative; top:2px;">shopping_bag</span> Cotizar
                    </h5></a>
                    <a href="./contacto.php" class="text-center boton-nav-hamburger">

                    <h5  type="button" class="montserrat bold-4 text-center py-4 border-bottom" >
                        <span class="material-symbols-outlined" style="position: relative; top:4px;">mail</span> Contacto
                    </h5></a>
                </div>
                            
                
        </div>
        <!--nav1-->
        <nav id="fondo_header" class="nav2 ">
            <div id="menu-pc" class="row p-0 m-0 py-3" >
                <div class="col-xl-4 col-sm-12">
                        <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">                   
                            <a id="" class=" py-1" href="../index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo"></a>
                        </div>
                </div>
                <div  class="col-md col-sm-12 d-flex align-items-end pb-3 m-0 p-0 d-flex justify-content-sm-center justify-content-xl-start">
                    <div class="row p-0 m-0 " style="width: 640px;">
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item  columnas_header ">                   
                                <a id="" class="btn w-100 border-0  montserrat boton-nav" href="../index.php" role="button" style="width: 100px;">
                                <h5 class="p-0 m-0">INICIO</h5></a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="seccion_tienda" class="nav-item  columnas_header ">                   
                            <a id="boton_tienda" class="btn border-0 w-100  boton-nav montserrat " href="./tienda.php?page=1" role="button">
                                <h5 class="p-0 m-0">TIENDA</h5></a>
                            </a>
                            </div>
                        </div>

                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item   columnas_header ">                   
                                <a id="" class="btn w-100 border-0 boton-nav montserrat " href="./cotizar.php" role="button">
                                    <h5 class="p-0 m-0">COTIZAR</h5></a>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item ">                   
                                <a id="" class="btn w-100  border-0 boton-nav montserrat " href="./contacto.php" role="button">
                                    <h5 class="p-0 m-0">CONTACTO</h5></a>
                                </a>
                            </div>
                        </div>
                    </div>    
                </div>
                
            </div> 
            <div id="menu-movil" class="row p-0 m-0 py-3" >
                <div class="col-3 ps-5 d-flex align-items-end">
                        <div id="" class="nav-item my-2 px-0 ">  
                        <button id="btn_hamburger" type="button" class="f-invisible border-0">
                            <span class="material-symbols-outlined text-white " style="font-size:45px;">menu</span>
                        </button>
                        </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                        <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">                   
                            <a id="" class=" py-1" href="index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo" style="height: 150px; width: 150px;"></a>
                        </div>
                </div>
                
            </div>

        </nav>  
        <!--nav1-->
  </header>

    <main>
        <?php
        error_reporting(0);
        include("../PHP/conexion.php");
        $id = $_GET["id"];
        $color = $_GET["color"];
        $query = "SELECT * FROM productos WHERE id_producto = '$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
        $sku = $row['sku'];
        $query = "SELECT * FROM imagenes WHERE sku = '$sku'";
        $resultado2 = $conexion->query($query); 
        $resultado3 = $conexion->query($query); 
        $cont=0;
        //echo $row['nombre'];
        ?>
        <div class="container f-blanco">
            <!--INFO NAVEGACION-->    
                <div class="row p-4">
                    <h6 class="montserrat bold-4 center-text m-0 p-0 c-gris ">
                        <a href="../index.php" class="text-decoration-none c-gris text-info-nav ">Inicio</a>
                        <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;"> 
                        <a href="./tienda.php" class="text-decoration-none c-gris text-info-nav">Tienda</a>
                        <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;">
                        <a href="./producto.php?id=<?php echo $row['id_producto']; ?>" class="text-decoration-none c-gris text-info-nav montserrat bold-4"><?php echo $row['nombre_producto']; ?></a>
                    </h6>
                </div>
                    
               
            <!--INFO NAVEGACION-->
            <!--PRESENTACION PRODUCTO-->
                <div class="row pt-4 ">
                    <div class="col-sm-12 col-lg-1 p-0 m-0 h-25" style="">
                        <div class="row p-0 m-0 d-flex justify-content-center">
                            <?php
                            while ($row2 = $resultado2->fetch_assoc())
                            {
                                    if ($cont==0){
                            ?>          <div class="col-3 col-lg-12  p-0 m-0 mb-2 mx-2 mx-lg-0" style="height: 95px; width: 110px;">
                                            <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen'])?>" alt="" class="p-0 rounded-3 shadow fx-opacidad w-100 h-100 " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $cont?>" class="active" aria-current="true" aria-label="Slide <?php echo $cont?>">  
                                        </div>
                            <?php   }
                                    else{     
                            ?>          <div class="col-3 col-lg-12  p-0 m-0 mb-2 mx-2 mx-lg-0" style="height: 95px; width: 110px;">
                                            <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen'])?>" alt="" class="p-0 rounded-3 shadow fx-opacidad w-100 h-100 " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $cont?>" aria-label="Slide <?php echo $cont?>">  
                                        </div>
                            <?php   } 
                                    $cont++;
                            }?> 
                                

                        </div>
                    </div>
                    <div id="product" class="col-sm-12 col-lg-5 d-flex align-items-center f-invisible p-0  rounded-3 " style="height: 507px;">
                        <div id="carouselExampleIndicators" class="carousel slide h-100 w-100 px-3 " data-bs-ride="carousel">
                            <div class="carousel-inner rounded-3  h-100 w-100 d-flex align-items-center shadow-sm">
                            <?php 
                                    $cont=0;
                                    while ($row3 = $resultado3->fetch_assoc()){
                                    if ($cont==0){
                            ?>
                                        <div class="carousel-item active ">     
                                            <img src="data:image/*;base64,<?php echo base64_encode($row3['imagen']) ?>" alt="..." class="d-block w-100 h-100">
                                        </div>
                            <?php   }
                                    else{
                            ?>   
                                        <div class="carousel-item ">
                                            <img src="data:image/*;base64,<?php echo base64_encode($row3['imagen']) ?>" alt="..." class="d-block w-100 h-100">
                                        </div>
                            <?php   }
                                        $cont++;
                                    }
                            ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5 px-5 mt-4 mt-lg-0 f-blanco">
                        <h1 class="montserrat bold-5 mt-3"><?php echo $row['nombre_producto']; ?></h1>
                        <h1 class="montserrat bold-7 mt-4 pt-2 c-rosa">$ <?php echo $row['precio']; ?></h1>
                        <p class="montserrat mt-4 c-gris">
                            Precio con Instalación e iva incluido </br>
                            Todos nuestros productos incluyen Kit de instalación 3mts</p>
                        <h6 class="montserrat bold-4 mt-5 c-gris">Color</h6>
                        <div class="row">
                            <div class="col">

                                <a href="./producto.php?id=<?php echo $row['id_producto']; ?>&&color=negro" type="submit">
                                    <?php
                                    if ($color == "negro") { ?>
                                        <label id="input-radio" for="" class="input-negro borde-sombra"></label>
                                    <?php
                                    } else {
                                    ?>
                                        <label id="input-radio" for="" class="input-negro "></label>
                                    <?php } ?>
                                </a>
                                <a href="./producto.php?id=<?php echo $row['id_producto']; ?>&&color=blanco" type="submit">
                                    <?php
                                    if ($color == "blanco") { ?>
                                        <label id="input-radio2" for="" class="input-blanco borde-sombra ms-1"></label>
                                    <?php
                                    } else {
                                    ?>
                                        <label id="input-radio2" for="" class="input-blanco ms-1"></label>
                                    <?php } ?>
                                </a>

                            </div>



                        </div>
                        <div class="row m-0 mt-4">
                            <button class=" boton2" data-bs-toggle="modal" data-bs-target="#Modal" style="width: 220px ; height: 50px;">
                                <h6 class="montserrat text-white text-center bold-5 pt-2 border-0">Lo quiero</h6>
                            </button>
                                <!-- Modal -->
                                <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title montserrat" id="exampleModalLabel"><?php echo $row['nombre_producto']?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="../PHP/correos.php?op=3&&nombre_producto=<?php echo $row['nombre_producto'];?>&&id_producto=<?php echo $row['id_producto'];?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body px-5 mx-5">
                                                
                                                            <div class="form-floating mt-2 ">
                                                                <input type="text" class="form-control" name="correo" id="floatingInput" placeholder="Nombre" required>
                                                                <label for="floatingInput"><p class="montserrat">Nombre</p></label>
                                                            </div>
                                                            <div class="form-floating mt-2 ">
                                                                <input type="email" class="form-control" name="telefono" id="floatingInput" placeholder="+56975565522" required>
                                                                <label for="text"><p class="montserrat">Telefono</p></label>
                                                            </div>                                               
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center border-0 mb-3">       
                                                    <button type="submit" class="boton2" style="width: 250px; height: 50px;" name="llamar">
                                                        <h6 class="montserrat text-white text-center bold-5 pt-2 border-0">Quiero que me llamen</h6>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <div class="boton2 mt-5" style="height: 2px;"></div>
                        </div>
                        <div class="row p-0 m-0 mt-4">
                            <div class="row p-0 m-0">
                                <div class="col-3 p-0 m-0">
                                    <p class="montserrat c-gris  m-0">SKU</p>
                                    <p class="montserrat c-gris  m-0">Etiqueta</p>
                                </div>
                                <div class="col  p-0 m-0">
                                    <p class="montserrat c-gris  m-0">: <?php echo $row['sku']; ?></p>
                                    <p class="montserrat c-gris m-0">: <?php echo $row['tipo_producto']; ?>; <?php echo $row['btu']; ?> BTU; 
                                    <?php 
                                        if ($row['id_marca']==1)
                                            echo "Kendall"; 
                                        else if ($row['id_marca']==2)
                                            echo "AKL";
                                        if ($row['id_marca']==3)
                                            echo "Heinsense";
                                     ?>
                                     </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <!--PRESENTACION PRODUCTO-->
            <!--DESCRIPCION-->
                <div class="row border-top f-blanco px-4 mt-5">
                    <h4 class="montserrat bold-6 mt-4">- Descripcion</h4>
                    <p class="montserrat mt-1 c-gris">
                        <?php echo $row['descripcion']?>
                    </p>
                    <h4 class="montserrat bold-6">- Informacion adicional</h4>
                    <p class="montserrat mt-1 c-gris">
                        <?php echo $row['info_adicional'];?></p>
                </div>
            <!--DESCRIPCION-->

        </div>




    </main>
    <footer>




    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script type="module" src="../public/procedimientos.js"></script>
    <script type="module" src="../public/procedimientos2.js"></script>
</body>



</html>