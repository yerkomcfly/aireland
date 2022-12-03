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
        
    ?>
    <div class="container">
        <div class="row">

                <form id="edit_admin" action="../PHP/subir.php" method="POST" enctype="multipart/form-data">
                    <input type="file" class="form-control" id="inputGroupFile01" name="i_p" accept="image/*">
                    <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
                    <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
                    <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
                    <input type="file" class="form-control" id="inputGroupFile01" name="i_s[]" accept="image/*">
                            <input name="sku" type="text" placeholder="sku">
                            <input name="nombre_producto" type="text" placeholder="nombre_producto">
                            <input name="subtitulo" type="text" placeholder="subtitulo">
                            <input name="precio" type="text" placeholder="precio">
                            <select name="btu" class="form-select" aria-label="Default select example"> 
                                <option selected>BTU</option>
                                <option value="9000">9000</option>
                                <option value="12000">12000</option>
                                <option value="18000">18000</option>
                                <option value="24000">24000</option>
                            </select>
                            <select name="tipo_producto" class="form-select" aria-label="Default select example">  
                                <option  selected>Tipo de producto</option>
                                <option  value="onoff">ON/OFF</option>
                                <option  value="inverter">Inverter</option>
                            </select>
                            <select name="id_marca" class="form-select" aria-label="Default select example">
                                <option  selected>Marca</option>
                                <option  value="1">Kendal</option>
                                <option  value="2">AKL</option>
                                <option  value="3">Heinsense</option>
                            </select>
                            <select name="color" class="form-select" aria-label="Default select example">
                                <option  selected>Color</option>
                                <option  value="blanco">Blanco</option>
                                <option  value="negro">Negro</option>
                            </select>
                            <textarea name="descripcion" type="text" placeholder="descripcion"></textarea>
                            <textarea name="info_adicional" type="text" placeholder="info_adicional"></textarea>
                            <button type="submit" name="guardar">Guardar</button>
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