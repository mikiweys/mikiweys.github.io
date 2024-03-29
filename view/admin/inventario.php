<?php 
  require('../../controller/verificacion_admin.php');  
?>
<?php 
require('../../controller/conexion.php');

if(isset($_GET['search'])) {
  $busqueda=$_GET["search"];
  $mostrarArticulos = "SELECT * from inventario WHERE producto LIKE '%$busqueda%'";
  $query = $db->query($mostrarArticulos);
  $inventario = $query;
}
else{
  include('../../model/inventario_select_all.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario | MIKIWEY'S APP</title>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

  <!-- LIBRERÍAS CSS -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../../css/styles.css">

  <!-- LOGO ICON -->
  <link rel="shortcut icon" href="../../IMG/todo/logo.png">
  <link rel="icon" sizes="192x192" href="../../IMG/todo/logo2.ico">
  <link rel="favicon" href="../../IMG/todo/logo2.ico">
  <link rel="apple-touch-icon" href="../../IMG/todo/logo2.ico">

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="bg-foto">
<?php include('../include/header_admin.php'); ?>

  <div class=" my-5 p-5 shadow color">
    <nav class="navbar navbar-light d-flex">
      <h1>Inventario</h1>
      <form action="../../controller/inventario_buscar.php" method="POST" class="form-inline d-flex">
        <input name="buscador" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <input class="btn btn-warning" value="Buscar"  type="submit" name="buscar">
   </form>
    </nav>
<div class="table-responsive">
<table class="table table-bordered border-1 bg-white">
    <thead>
      <tr class="bnaranja" >
        <th scope="col">id</th>
        <th scope="col" class="" >Imagen</th>
        <th scope="col" class="" >Producto</th>
        <th scope="col" class="" >Descripción</th>
        <th scope="col">Precio por unidad</th>
        <th scope="col">Categoria</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($inventario as $producto){ ?>
      <tr class="text-center">
        <th><?php echo $producto['id_inv']; ?></th>
        <td><img src="../../IMG/inventario/<?php echo $producto['imagen']; ?>" width="120" alt="..."></td>
        <td><?php echo $producto['producto']; ?></td>
        <td><?php echo $producto['descrip']; ?></td>
        <td><?php
         echo number_format ($producto['preuni']); ?></td>
        <td><?php echo $producto['cat']; ?></td>
        <td><?php echo $producto['cantidad']; ?></td>
        <td><?php $total=$producto['preuni']*$producto['cantidad'];
         echo number_format($total); 
         ?></td>
        <td><a href="inventario_modificar.php?id=<?=$producto['id_inv']?>" type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
        <td><a href="../../controller/inv_eliminar.php?id=<?=$producto['id_inv']?>" type="button" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
      </tr>
  <?php }?>
    </tbody>
  </table>
  </div>
<!-- DELETE FROM `inventario` WHERE `inventario`.`id_inv` = 1 -->

<div class="row justify-content-center">

  <div class="col row p-3"> <button type="button" class="btn btn-success w-25" data-bs-toggle="modal" data-bs-target="#subir"><i class="bi bi-arrow-bar-up pe-2"></i>Subir</button> </div>
  <?php
  if(isset($_SESSION['alerta'])){ ?>
    <div class="row justify-content-end fixed-bottom">
          <div class="alert alert-<?php echo $_SESSION['tipo']?> alert-dismissible fade show  w-25 " role="alert">
         <strong><?php echo $_SESSION['alerta']; ?></strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </button>
       </div>
          <?php unset($_SESSION['alerta']);} ?>
          </div>
<!-- Modal -->
<div class="modal fade" id="subir" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Subir producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../../controller/inv_subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label  class="fs-5 pb-2">Selecciona una Imagen</label>
              <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="imagen">
              </div>
          </div>
          <div class="form-group row">
            <div class="">
              <label  class="fs-5 py-1 ">Nombre del producto</label>
              <input class="form-control" type="text" name="producto">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Descripción</label>
              <input class="form-control" type="text" name="descrip">
            </div>
            <div class="">
              <label  class="fs-5 py-1" >Precio. unidad</label>
              <input  class="form-control" type="number" name="preuni" step="50">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Categoria</label>
              <select name="cat" id="" class="form-select">
                <option value="" disabled selected>Categoria...</option>
                <?php
                  $cat="SELECT * FROM categorias";
                  $resul=mysqli_query($db,$cat);
                  while($valores = mysqli_fetch_array($resul)){
                    echo '<option value="'.$valores['categoria'].'">'.$valores['categoria']. '</option>';
                  }
                ?>
              </select>
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Cantidad</label>
              <input  class="form-control" type="number" name="cant">
            </div>

          </div>
          
       </div>
       
  </div>
</div>
      </div>
      <div class="modal-footer align-items-center justify-content-around">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" value="Guardar" class="btn btn-warning my-5" name="agregar">
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

</div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="../../js/scripts.js"></script>

</body>
  </html>