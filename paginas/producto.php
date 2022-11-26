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
                        <a id="" class="btn w-100 py-1 botones_nav" href="../index.php" role="button">
                            <h5 id="text_botones_nav">INICIO</h5>
                        </a>
                    </li>
                </div>
                <div class="col align-self-end pb-3">
                    <li id="seccion_tienda" class="nav-item my-2 px-0 columnas_header">
                        <a id="boton_tienda" class="btn w-100 py-1 botones_nav" href="./tienda.php" role="button">
                            <h5 id="text_botones_nav">TIENDA</h5>
                        </a>
                    </li>
                </div>

                <div class="col align-self-end pb-3">
                    <li id="" class="nav-item my-2 px-0 columnas_header">
                        <a id="" class="btn w-100 py-1 botones_nav" href="./cotizar.html" role="button">
                            <h5 id="text_botones_nav">COTIZAR</h5>
                        </a>
                    </li>
                </div>
                <div class="col  align-self-end pb-3">
                    <li id="" class="nav-item my-2 px-0 ">
                        <a id="" class="btn w-100 py-1 botones_nav" href="./contacto.html" role="button">
                            <h5 id="text_botones_nav">CONTACTO</h5>
                        </a>
                    </li>
                </div>
                <div class="col-4 "></div>
            </ul>
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
        $query2 = "SELECT * FROM imagenes WHERE id_imagen = '$id'";
        $resultado2 = $conexion->query($query2);
        if (!$resultado && !$resultado2)
            echo "Error";
        $row = $resultado->fetch_assoc();
        $row2 = $resultado2->fetch_assoc();
        //echo $row['nombre'];
        ?>
        <div class="container f-blanco px-4 ">
            <!--INFO NAVEGACION-->    
                <div class="row p-0 m-0 mt-2 w-100 ">
                    <div class="row p-0 m-0 ">
                        <h6 class="center-text m-0 p-0 pt-2 c-gris ">
                            <a href="../index.php" class="text-decoration-none c-gris text-info-nav montserrat">Inicio</a>
                            <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;"> 
                            <a href="./tienda.php" class="text-decoration-none c-gris text-info-nav montserrat">Tienda</a>
                            <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;">
                            <a href="./producto.php?id=<?php echo $row['id_producto']; ?>" class="text-decoration-none c-gris text-info-nav montserrat"><?php echo $row['nombre_producto']; ?></a>
                        </h6>
                    </div>
                </div>
            <!--INFO NAVEGACION-->
            <!--PRESENTACION PRODUCTO-->
                <div class="row pt-4">
                    <div class="col-1 p-0 mx-2 " style="width: 110px;">
                        <div class="row  p-0 m-0 mb-2 f-blanco " style="height: 110px;">
                            <img src="../imagenes/productos/1.png" alt="" class="p-0 rounded-3 shadow fx-opacidad" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">  
                        </div>
                        <div class="row  p-0 m-0 mb-2 f-blanco " style="height: 110px;">
                            <img src="../imagenes/productos/LOGO MYSS.jpg" alt="" class="p-0 rounded-3 shadow fx-opacidad" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                        </div>
                    </div>
                    <div id="product" class="col-5 d-flex align-items-center f-blanco p-0 shadow-sm rounded-3 " style="width: 611px; height: 520px;">
                        <div id="carouselExampleIndicators" class="carousel slide w-100 h-100 " data-bs-ride="carousel">
                            <div class="carousel-inner h-100 w-100 rounded-3">
                                <div class="carousel-item active ">     
                                    <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen']) ?>" alt="..." class="mostrador-productos">
                                </div>
                                <div class="carousel-item h-100 w-100">
                                    <img src="../imagenes/productos/LOGO MYSS.jpg" class="mostrador-productos" alt="...">
                                    
                                </div>
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
                    <div class="col-5 px-5 ms-2 f-blanco ">
                        <h1 class="montserrat bold-5 mt-3"><?php echo $row['nombre_producto']; ?></h1>
                        <h1 class="montserrat bold-7 mt-4 pt-2 c-rosa">$ 450.000</h1>
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
                                            <form action="../PHP/correos.php" method="POST" enctype="multipart/form-data">
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
                                    <p class="montserrat c-gris  m-0">: SS001</p>
                                    <p class="montserrat c-gris m-0">: Inverter; 9.000 BTU; Kendal</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <!--PRESENTACION PRODUCTO-->
            <!--DESCRIPCION-->
                <div class="row border-top mt-5 px-5 mx-5 pt-4 f-blanco ">
                    <h4 class="montserrat bold-6">- Descripcion</h4>
                    <p class="montserrat mt-1 c-gris">
                        asdgnasldinv ianñdsoigj gioj oiaisjdpgojpoasjdgpojpaosd pioajpogjpoasdjpogjpoasjpojpasdjpogjpaos 
                        jpofasjñdvnuaisdlvoew ylhwoea gj09jgvw n 9{p ña wjñvha l e vbño wr asdgnasldinv ianñdsoigj gioj oiaisjdpgojpoasjdgpojpaosd 
                        pioajpogjpoasdjpogjpoasjpojpasdjpogjpaos jpofasjñdvnuais dlvoew ylhwoea gj09jgvw n 9{p ña wjñvha l e vbño wr 9{p ña wjñvha 
                        l e vbño wr asdgnasldinv ianñdsoigj gioj oiaisjdpgojpoasjdgpojpaosd pioajpogjpoasdjpogjpoasjpojpasdjpogjpaos jpofasjñdvnuais 
                        dlvoew ylhwoea gj09jgvw n 9{p ña wjñvha l e vbño wr
                    </p>
                    <h4 class="montserrat bold-6">- Informacion adicional</h4>
                    <p class="montserrat mt-1 c-gris">
                        BTU : 12.0000</br>
                        Medidas : 1,50x50x40</br>
                        Consumo: 250 WT</br>
                        Modelo :  Inverter supt</br>
                        Hecho en: China</br>
                        Garantia: 12 meses en servicio tecnico de la marca
                    </p>
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
</body>



</html>