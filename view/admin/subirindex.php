<?php 
  include('../../controller/conexion.php');
  $query = $PDO->prepare("SELECT * from imagenes");
  $query->execute();
  $resultado = $query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="css/styles.css">
    <title>MIKIWEY'S APP AD | Inventario </title>
    <!--  -->
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="../../CSS/font-awesome.min.css">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
    <link rel="stylesheet" href="../../CSS/contacto.css">
</head>
<body>

<!--  -->

<!--  -->
  <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../../controller/subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group my-5">
              <label for="my-input" class="fs-2 fuente1 pb-5">Selecciona una Imagen</label>
              <input id="my-input" type="file" name="imagen" class="fuente1">
          </div>
          <div class="form-group">
              <label for="my-input" class="fs-2 py-1 fuente1">Título</label>
              <input id="my-input" class="form-control" type="text" name="titulo">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-danger mb-5" name="Guardar">
         </form>
       </div>
       <div class="col pt-5 mt-5 row">
           <h1 class=" display-5 text-center mano p-5">Productos</h1>
           <div class="card-columns">
               <?php foreach($resultado as $row){ ?>
         <div class="card">
      <img src="../../IMG/productos/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
    </div>
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
</body>
</html>