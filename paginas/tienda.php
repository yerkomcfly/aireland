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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=outline -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=round -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=sharp -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=twotone -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
            rel="stylesheet">
    <link rel="stylesheet" href="public/estilo.css">
    <link rel="stylesheet" href="../public/estilo.css">
    
</head>
<body class="f-gris">

<header>
    <div id="modal_menu_filtro" class="vh-100 w-75 display-none">
            <div class="row p-0 m-0 my-4 d-flex justify-content-end">
                <span id="btn_filter_exit" type="button" class="material-symbols-outlined c-celeste-oscuro d-flex justify-content-end" style="font-size: 40px;">close</span> 
            </div>
            <div class="row  p-0 m-0 mx-5">
                <form method="post">
                        <?php $palabra=""?>
                        <div class="row ">
                            <h6 class="montserrat bold-7 mb-3 p-0">Filtro:</h6>    
                            <div class="row  m-0 pb-3 p-0">
                                <div class="input-group p-0">
                                    <div class="row rounded-2 w-100 borde-animado p-0 m-0 f-gris">
                                        <div class="col-2 px-2 py-2 ">
                                            <img src="../imagenes/search.svg" alt="" style="width: 25px;" class=""> 
                                        </div>
                                        <div class="col px-3 pt-2 center-text  p-0 m-0">
                                            <input class=" border-0 w-100 montserrat f-gris p-0" type="text" id="buscar" placeholder="Buscar" value="<?php echo $palabra;?>" name="palabra">  
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>   
                        </div>
                 

                    
                        <div class="row border-bottom pb-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Tipo</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                    On/Off
                                </label>
                                
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                    Inverter
                                </label>
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Marca</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="Kendal" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Kendal">
                                    Kendal
                                </label>
                                </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="2" id="AKL" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="AKL">
                                    AKL
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="3" id="Heinsense" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Heinsense">
                                    Heinsense
                                </label>
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">BTU</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                    18.000
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                    24.000
                                </label>
                            </div>
                        </div>            
                        <div class="row m-0 mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn boton3 mt-2 montserrat border-0 text-white bold-5" name="enviar" style="width: 150px;">Filtrar</button>
                            
                        </div> 
                    </form>
            </div>
                        
            
    </div>

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
        <nav id="fondo_header" class="nav2">
            <div id="menu-pc" class="row p-0 m-0 py-3 " >
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
            <div id="menu-movil" class="row p-0 m-0 py-3 " >
                <div class="col-3 ps-5 d-flex align-items-end ">
                        <div id="" class="nav-item my-2 px-0 ">  
                        <button id="btn_hamburger" type="button" class="f-invisible border-0">
                            <span class="material-symbols-outlined text-white " style="font-size:45px;">menu</span>
                        </button>
                        </div>
                </div>
                <div class="col-6 d-flex justify-content-center ">
                        <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">                   
                            <a id="" class=" py-1" href="index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo" style="height: 150px; width: 150px;"></a>
                        </div>
                </div>
                
            </div>

        </nav>  
    <!--nav1-->
</header >

  <main>
    <?php error_reporting(0);
?>

    <div  id="" class="container-fluid container-lg container_tienda f-gris">
    <!--INFO NAVEGACION-->    
        <div class="row p-4">
            <h6 class="montserrat bold-4 center-text m-0 p-0 c-gris ">
                <a href="../index.php" class="text-decoration-none c-gris text-info-nav ">Inicio</a>
                <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;"> 
                <a href="./tienda.php" class="text-decoration-none c-gris text-info-nav">Tienda</a>
            </h6>
        </div>
        
    <!--INFO NAVEGACION--> 
    <div class="row">
        <!--FILTRO-->
            <div id="menu_filtros_pc" class="col-sm-12 col-xl-3 px-5 py-4 f-blanco h-25 me-2" style="">   
                
                <div  class="card border-0 rounded-0">
                <form method="post">
                        <?php $palabra=""?>
                        <div class="row ">
                            <h6 class="montserrat bold-7 mb-3 p-0">Filtro:</h6>    
                            <div class="row  m-0 pb-3 p-0">
                                <div class="input-group p-0">
                                    <div class="row rounded-2 w-100 borde-animado p-0 m-0 f-gris">
                                        <div class="col-2 px-2 py-2 ">
                                            <img src="../imagenes/search.svg" alt="" style="width: 25px;" class=""> 
                                        </div>
                                        <div class="col px-3 pt-2 center-text  p-0 m-0">
                                            <input class=" border-0 w-100 montserrat f-gris p-0" type="text" id="" placeholder="Buscar" value="<?php echo $palabra;?>" name="palabra">  
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>   
                        </div>
                 

                    
                        <div class="row border-bottom pb-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Tipo</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                    On/Off
                                </label>
                                
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                    Inverter
                                </label>
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Marca</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="Kendal" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Kendal">
                                    Kendal
                                </label>
                                </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="2" id="AKL" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="AKL">
                                    AKL
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="3" id="Heinsense" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="Heinsense">
                                    Heinsense
                                </label>
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">BTU</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                    18.000
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                    24.000
                                </label>
                            </div>
                        </div>            
                        <div class="row m-0 mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn boton3 mt-2 montserrat border-0 text-white bold-5" name="enviar" style="width: 150px;">Filtrar</button>
                            
                        </div> 
                    </form>
                </div>
            </div>
            <div id="menu_filtros_movil" class="col-12  mb-2 f-blanco">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center border-end">
                        <button id="btn_filter" type="button" class="btn border-0 c-gris pb-3 montserrat">
                            <span class="material-symbols-outlined" style="position: relative; top:5px;">filter_alt</span> Filtro
                        </button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <button id="btn_ordendar" type="button" class="btn border-0 c-gris pb-3 montserrat">
                        <span class="material-symbols-outlined" style="position: relative; top:5px;">filter_list</span> Ordenar
                        </button>
                    </div>

                    <div id="modal_ordenar" class="row p-0 m-0 display-none">
                       <form method="post ">
                            <div class="col-12 d-flex justify-content-center pt-3">
                                <button type="submit" value="1" name="ordenar" class="btn boton-nav-hamburger montserrat border-0">Precio menor a mayor</button> 

                            </div>
                            <div class="col-12 d-flex justify-content-center py-3">
                                <button type="submit" value="0" name="ordenar" class="btn boton-nav-hamburger montserrat border-0 ">Precio mayor a menor</button> 
                            </div>
                       </form> 
                    </div>
                </div>
                
                        
            </div>
            
        <!--FILTRO--> 
        <!--PRODUCTOS-->   
            <div class="col-12 col-xl f-blanco">
                <div class="row d-flex justify-content-center">
                    <div class="card border-0 rounded-0 ">
                        <div class="card-body ">
                            <div id="" class="row m-0 p-0 ">
                                    <?php
                                        include ("../PHP/filtro.php");
                                        include ("../PHP/conexion.php");
                                        //echo $consulta;
                                        $page = $_GET['page'];
                                        $item = 1;
                                        
                                        
                                        $limit= (($page-1)*6)+1;
                                        
                                        $cant=1;
                                        $cant2=1;
                                        if ($consulta=="")
                                        {
                                            $query = "SELECT * FROM productos";
                                            $resultado = $conexion->query($query);  
                                        }                         
                                        else
                                            $resultado = $conexion->query($consulta); 

                                        
                                        while ($row = $resultado->fetch_assoc())
                                        {
                                            
                                            if ($limit<=$cant && $cant2<=6)
                                            {    
                                            $sku = $row['sku'];
                                            $query2 = "SELECT * FROM imagenes WHERE sku = '$sku' AND tipo_imagen='i_p'";
                                            $resultado2 = $conexion->query($query2);
                                            $row2 = $resultado2->fetch_assoc();
                                    ?>
                                            <div class="col-sm-6 col-xl-4 card_productos">
                                                <div class="card  mb-5 p-0 border-0 shadow-sm">
                                                    <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen'])?>" class="card-img-top " alt="..." >
                                                    <div class="card-body">
                                                        <h5 class="card-title montserrat bold-6"><?php echo $row['nombre_producto']?></h5>
                                                        <p class="card-text montserrat bold-5">9000 BTU/h</p>
                                                        <h5 class="montserrat bold-6 mt-3 mb-4">$ <?php echo $row['precio'];?></h5>
                                                        <a href="./producto.php?id=<?php echo $row['id_producto'];?>" class=" boton2  position-absolute top-100 start-50 translate-middle" style="width: 150px; height: 40px;">
                                                            <h6 class="montserrat text-white text-center bold-5 pt-2 center-text border-0">Ver más +</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>    
                                    <?php       $cant2++;
                                            }
                                            
                                            if ($cant2>6)
                                            {
                                                $item++;
                                                //break;
                                            }
                                            $cant++;
                                                    
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-5">
                        <?php 
                        $x=1;
                        $r=1;
                        $r2=1;
                        if ($page!=1 && $page!="")
                        {
                            ?>
                            <a id="" href="./tienda.php?page=<?php if ($page>1)echo $page-1; else{echo 1;} ?>" type="submit" class="" style="width: 40px; border-radius: 10px;">
                            <img src="../imagenes/arrow_back_ios.svg" alt="" style="width: 15px;" class="center-text pt-2"> 
                            </a>
                            <?php
                        }
                        for ($i=$page;$i<=$page;$i++){
                        
                            if($page==$i && $page!="")
                            {
                            ?>
                            <a id="" href="./tienda.php?page=<?php echo $i?>" type="submit" class="btn montserrat bold-6 boton3 text-white text-center" style="width: 40px; border-radius: 10px">
                            <?php echo $i?>
                            </a>
                            <?php 
                            }
                            else if ($page!=$i ){
                            ?>
                                <a id="" href="./tienda.php?page=<?php echo $i?>" type="submit" class="btn montserrat bold-6 text-secondary text-center " style="width: 40px; border-radius: 10px">
                                <?php echo $i?>
                                </a>
                            <?php  
                            }   
                        }
                        if ($item>$page && $page!=""){
                            ?>
                                    <a id="" href="./tienda.php?page=<?php echo $page+1?>" type="submit" class="" style="width: 40px; border-radius: 10px;">
                                    <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;" class="center-text pt-2"> 
                                    </a>
                            <?php }?> 
                                                               
                </div>
            </div>
        <!--PRODUCTOS-->   
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

  <script type="module" src="../public/procedimientos2.js"></script>
</body>



</html>