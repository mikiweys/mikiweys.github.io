<?php
include('login.php');
if(isset($_POST['agregar'])){
    $imagen = $_FILES['imagen']['name'];
    $producto = $_POST['producto'];
    $desc = $_POST['descrip'];
    $preuni = $_POST['preuni'];
    $cat = $_POST['cat'];
    $cant = $_POST['cant'];

    if(isset($imagen) && $imagen != "" && !empty($_POST['producto']) && !empty($_POST['preuni']) && !empty($_POST['cat']) && !empty($_POST['cant'])){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png') ))){
          $_SESSION['alerta'] = 'Solo se permiten archivos jpeg, jpg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../view/admin/inventario.php');
       }else{
        include_once('../model/producto_insertar.php');
         if($resultado){
            move_uploaded_file($temp,'../IMG/inventario/'.$imagen);   
            $_SESSION['alerta'] = 'Producto subido exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/inventario.php');
         }else{
            $_SESSION['alerta'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/inventario.php');
         }
       }
    }
      else {
         $_SESSION['alerta'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/admin/inventario.php');

      }
}


?>