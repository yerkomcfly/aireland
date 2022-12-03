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

<body class="f-blanco">
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
    <div class="container vh-100">
        <div class="row mt-5 d-flex justify-content-center  mx-2" style="">
            <div class="col-sm-12 col-lg-8 shadow px-5  d-flex align-items-center">
                <div class="row px-md-5">

                
                    <div class="row p-0 mt-5 ">
                        <h6 class="montserrat bold-7 text-center">Cotiza con nosotros</h6>
                        <h5 class="montserrat bold-7 text-center">Envia las fotos de la zona en donde quieras instalar!!</h5>
                    </div>
                    <form action="../PHP/correos.php?op=1" method="POST" enctype="multipart/form-data">
                        <div class="form-floating p-0 m-0 mt-4">
                            <input type="text" class="form-control " name="nombre" id="floatingInput" placeholder="Nombre" required>
                            <label for="floatingInput"><p class="montserrat">Nombre</p></label>
                        </div>
                        
                        <div class="row p-0 m-0">
                            <div class="col-sm-12 col-lg-6 p-0 p-0 m-0 pe-lg-1">
                                <div class="form-floating mt-2">
                                    <input type="email" class="form-control" name="correo" id="floatingInput" placeholder="ejemplo@gmail.com" required>
                                    <label for="floatingInput"><p class="montserrat">Correo</p></label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 p-0 m-0 ps-lg-1">
                                <div class="form-floating mt-2">
                                    <input type="text" class="form-control" name="telefono" id="floatingInput" placeholder="ejemplo@gmail.com" required>
                                    <label for="floatingInput"><p class="montserrat">Telefono</p></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group p-0">
                            
                            <input type="file" multiple="true" class="form-control mt-2 montserrat" id="inputGroupFile01" name="archivos[]" accept="image/*" required>
                            
                        </div>
                        <div class="row p-0 mt-2 d-flex justify-content-center">
                        <button type="submit" class="btn mt-2 mb-5 boton3 border- montserrat text-white bold-5" name="enviar" style="width: 150px;">Enviar</button> 
                        </div>
                        
                    </form>
                </div>
            </div>               
        </div> 
    </div>
             

  </main>
  <footer>

    <div id="" class="fondo_footer w-100">

        
    </div>   
    
  </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
  <script src="../public/procedimientos2.js"></script>
</body>



</html>