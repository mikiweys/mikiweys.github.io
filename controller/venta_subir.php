<?php
include('conexion.php');
if(isset($_POST['agregar'])){
    $fecha = $_POST['fecha'];
    $produ = $_POST['produ'];
    $cant = $_POST['cant'];
    $preuni = $_POST['preuni'];
    $total = $_POST['total'];

    if(!empty($_POST['fecha']) && !empty($_POST['produ']) && !empty($_POST['cant']) && !empty($_POST['preuni']) && !empty($_POST['total']) & !empty($_POST['sal'])){
        include_once('../model/empleado_nuevo.php');

         if($resultado){
            $_SESSION['mensaje'] = 'Empleado agregado exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/empleados.php');
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/empleados.php');
         }
      }else {
         $_SESSION['mensaje'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/admin/empleados.php');
      }
   }
?>