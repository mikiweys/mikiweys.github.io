<?php 
$query = "UPDATE inventario SET producto = '$producto', preuni = '$preuni', cat = '$cat', cantidad = $cant WHERE id_inv = $id_inv";
$resultado = mysqli_query($db,$query);
?>