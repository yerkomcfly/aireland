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
        //error_reporting(0);
        include ("../PHP/conexion.php");
        //include ("../PHP/filtro.php");
        $id_producto = $_GET['id_producto'];
        $consulta = "SELECT * FROM productos WHERE id_producto = '$id_producto'"  ;
        $resultado = mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_array($resultado);
        $sku = $row['sku'];
        $consulta = "SELECT * FROM imagenes WHERE sku = '$sku'"  ;
        $resultado = mysqli_query($conexion, $consulta);
        $cont=0;
        $cont2=0;
    ?>
    <div class="container">
        <div class="row p-0 m-0">
            <form id="edit_admin" action="../PHP/editar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row['id_imagen']?>" method="POST" enctype="multipart/form-data">

            <div class="row p-0 m-0" >
                    <?php while($row2 = mysqli_fetch_array($resultado)){?>

                    <?php if($row2['tipo_imagen']=="i_p"){ $cont2++;?>
                        <div class="col- border border-danger p-0 m-0" style="height: 507px; width: 507px;">
                            <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen']) ?>" alt="..." class="w-100 h-100">
                        </div>
                        <div class="col-2 border">
                            <a href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row2['id_imagen']?>&&op=2"><span class="material-symbols-outlined">delete</span></a>
                        </div>
                    <?php 
                        }
                        if ($cont2==0)
                        {
                    ?>
                        <div class="col- border border-danger p-0 m-0" style="height: 507px; width: 507px;">
                        </div>
                        <div class="col-2 border">
                            <input type="file" class="form-control" id="inputGroupFile01" name="i_p" accept="image/*">          
                        </div>
                    <?php }?>
                <div class="col-12 border p-0 m-0">
                    <?php if($row2['tipo_imagen']=="i_s"){ $cont++;?>
                            <div class="row border p-0 m-0">
                                <div class="col-1 border border-danger p-0 m-0" style="height: 95px; width: 110px;">
                                    <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen']) ?>" alt="..." class="w-100 h-100 border">

                                </div>
                                <div class="col border">
                                    <a href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row2['id_imagen']?>&&op=2"><span class="material-symbols-outlined">delete</span></a>
                                </div>
                            </div>
                    <?php   }
                        } 
                        while ($cont<4)
                        {
                        $cont++;      
                    ?>
                        <div class="row border p-0 m-0">
                            <div class="col-1 border border-danger p-0 m-0" style="height: 95px; width: 110px;">

                            </div>
                            <div class="col-4 border">
                                <input type="file" class="form-control" id="inputGroupFile01" name="i_s_a[]" accept="image/*">          
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            
            
             


                <div class="col-12 p-0 m-0">
                    <input type="file" class="form-control" id="inputGroupFile01" name="archivo">

                </div>
            </div>


            
            <div class="col-12 border p-0 m-0">
                <div class="row p-0 m-0">
                        <div class="col-12 border p-0 m-0">
                            <input name="sku" type="text" value="<?php echo $row['sku'] ?>">
                        </div>
                        <div class="col-12 border p-0 m-0">
                            <input name="nombre_producto" type="text" value="<?php echo $row['nombre_producto'] ?>">
                        </div>
                        <div class="col-12 border p-0 m-0">
                            <input name="subtitulo" type="text" value="<?php echo $row['subtitulo'] ?>">
                        </div>
                        <div class="col-12 border p-0 m-0">
                            <input name="precio" type="text" value="<?php echo $row['precio']?>">
                        </div>
                        <div class="col-2 border p-0 m-0">
                            <select name="btu" class="form-select" aria-label="Default select example">
                                <option value="<?php echo $row['btu'] ?>" selected><?php echo $row['btu'] ?></option>
                                <option value="9000">9000</option>
                                <option value="12000">12000</option>
                                <option value="18000">18000</option>
                                <option value="24000">24000</option>
                            </select>
                        </div>
                        <div class="col-2 border p-0 m-0">
                            <select name="tipo_producto" class="form-select" aria-label="Default select example">
                                    <?php 
                                        if($row['tipo_producto']=="onoff"){?>
                                            <option  value="onoff" selected>ON/OFF</option>
                                            <option  value="inverter">Inverter</option>
                                    <?php }
                                        else if($row['tipo_producto']=="inverter"){?>
                                            <option  value="onoff" >ON/OFF</option>
                                            <option  value="inverter" selected>Inverter</option>
                                    <?php } 
                                    ?>
                            </select>
                        </div>
                        <div class="col-2 border p-0 m-0">
                            <select name="id_marca" class="form-select" aria-label="Default select example">
                                    <?php 
                                        if($row['id_marca']=="1"){?>
                                            <option  value="1" selected>Kendal</option>
                                            <option  value="2">AKL</option>
                                            <option  value="3">Heinsense</option>
                                    <?php }
                                        else if($row['id_marca']=="2"){?>
                                            <option  value="1" >Kendal</option>
                                            <option  value="2" >AKL</option>
                                            <option  value="3">Heinsense</option>
                                    <?php }
                                        else if($row['id_marca']=="3"){?>
                                            <option  value="1" >Kendal</option>
                                            <option  value="2">AKL</option>
                                            <option  value="3" selected>Heinsense</option>
                                    <?php } 
                                    ?>
                                
                            </select>
                        </div>
                        <div class="col-2 border p-0 m-0">
                            <select name="color" class="form-select" aria-label="Default select example">
                                    <?php 
                                        if($row['color']=="blanco"){?>
                                            <option  value="blanco" selected>Blanco</option>
                                            <option  value="negro">Negro</option>
                                    <?php }
                                        else if($row['color']=="negro"){?>
                                            <option  value="blanco" >Blanco</option>
                                            <option  value="negro" >Negro</option>
                                    <?php }?>
                                     
                                    
                                
                            </select>
                        </div>
                        <div class="col-12 border p-0 m-0">
                            <?php
                                $string2 = $row['descripcion'];
                                $string2 = str_replace("<br />","",$string2);           
                            ?>

                            <textarea name="descripcion" type="text" value="<?php echo $string2?>"><?php echo $string2?></textarea>

                        </div>
                        <div class="col-12 border p-0 m-0">
                            <?php
                                $string = $row['info_adicional'];
                                $string = str_replace("<br />","",$string);           
                            ?>
                            <textarea name="info_adicional" type="text" value="<?php echo $string?>"><?php echo $string?></textarea>

                        </div>
                        <div class="col-12 border p-0 m-0">
                            <button type="submit" name="guardar">Guardar</button>
                        </div>
                        </form>

                </div>
            </div>
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