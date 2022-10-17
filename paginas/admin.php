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

<body >
  <header>
    <!--nav1-->
    <div id="fondo_header_nav2" class="container-fluid">
        <div class="row">
            <ul class="nav p-0 m-0">
                <div class="col-3 d-flex flex-column p-0 m-0 ">
                    <li class="nav-item d-flex justify-content-center">

                    </li>
                </div>
                
                <div class="col-6 p-0 m-0 ">
                    <div class="row py-1 m-0">
                        <div id="" class="col d-flex flex-column p-0 m-0">
                            <li class="nav-item d-flex justify-content-center">
                                <h6 id="" class="tipografia1_2">+56976137638</h6>
                            </li>
                        </div>
                        <div id="" class="col d-flex flex-column p-0 m-0">                   
                            <li class="nav-item d-flex justify-content-center">
                                <h6 id="" class="tipografia1_2">yiturra@utem.cl</h6>
                            </li>
                        </div>
                        <div id="" class="col d-flex flex-column p-0 m-0">                   
                            <li class="nav-item d-flex justify-content-center">
                            </li>
                        </div>
                        <div id="" class="col d-flex flex-column p-0 m-0">                   
                            <li class="nav-item d-flex justify-content-end">
                                <a id="" class="btn border-0 py-0" href="#" role="button"><i id="" class="fa-brands fa-whatsapp icon_redes_sociales"></i></a>
                                <a id="" class="btn border-0 py-0" href="#" role="button"><i id="" class="fa-brands fa-instagram icon_redes_sociales"></i></a>
                                <a id="" class="btn border-0 py-0" href="#" role="button"><i class="fa-brands fa-facebook icon_redes_sociales"></i></a>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-0 pe-5 d-flex justify-content-end">
                    
                </div>
                
            </ul>
        </div>
    </div>
    <!-------->
    
  </header>

  <main>
    <?php 
        session_start();
        $_SESSION ["rol"] = "admin";
        
    ?>
    <div class="container">
        <div class="row">
             
            <div class="col-4">
                <form action="../PHP/subir_archivos.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Nombre del producto" aria-label="Nombre del archivo" name="nombre">
                    </div>
                    <div class="input-group mt-3">
                        <input type="file" class="form-control" id="inputGroupFile01" name="archivo">
                    </div>
                    <button type="submit" class="btn mt-3">Enviar</button>
                </form>
            </div> 
            <div class="col"></div> 
        </div>
        <h5 class="mt-2">PRODUCTOS</h5>
        <div class="row">
            <?php
                include ("../PHP/conexion.php");
                $query = "SELECT * FROM imagenes";
                $resultado = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_array($resultado))
                {
                
            ?>
                <div class="card card_productos m-1 p-0">
                    <img src="data:image/*;base64,<?php echo base64_encode($row['imagen'])?>" class="card-img-top " alt="..." >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre']?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['id'];?>">Editar</button>                         
                        <a href="../PHP/eliminar.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Eliminar</a>
                        <!-- Modal -->
                            <div class="modal fade" id="Modal<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <input type="text" class="form-control" value="<?php echo $row['nombre'];?>" aria-label="Nombre del archivo" name="nombre">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
            <?php        
                }
            ?>
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
  <script src="../public/procedimientos.js"></script>
</body>




</html>