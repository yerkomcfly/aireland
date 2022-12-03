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
    
    
  </header>

  <main>
    <?php  
        error_reporting(0);
        include ("../PHP/conexion.php");
        include ("../PHP/filtro.php");

    ?>
    <div class="container">
        <form method="post">
            <input id="searchTerm" type="text" name="busqueda_admin" value="<?php echo $busqueda_admin?>">
        </form>

        <div class="row">
            <div class="row">
                <div class="col-1">
                    <p>SKU</p>
                </div>
                <div class="col-5">
                    <p>Nombre</p>

                </div>
                
            </div>
            <?php
            
            //echo $consulta;
            if ($consulta=="")
                $consulta = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $consulta);
            while ($row = mysqli_fetch_array($resultado))
            {
            ?>
            <div class="row">
                <div class="col-1">
                    <p><?php echo $row['sku']?></p>
                </div>
                <div class="col-2">
                    <p><?php echo $row['nombre_producto']?></p>

                </div>
                <div class="col-1">
                    <a href="./ui-edit.php?id_producto=<?php echo $row['id_producto']?>" class="btn text-center border-0 c-celeste"><span class="material-symbols-outlined">edit</span></a>
                    <!-- Modal -->
                    <div class="modal fade" id="modal<?php echo $row['id_producto']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">SKU:<?php echo $row['sku'];?> - <?php echo $row['nombre_producto'];?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Seguro que deseas eliminar el producto?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <a href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&sku=<?php echo $row['sku']?>&&op=1" type="button" class="btn btn-primary">Listo!</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="col-1">
                    <a class="btn border-0 c-rosa" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id_producto']?>"><span class="material-symbols-outlined">delete</span></a>

                </div>
            </div>
            <?php
            }  
            ?>
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
    <script src="../public/busqueda.js"></script>

</body>




</html>