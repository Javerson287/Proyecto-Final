<?php
include('../class/conexion.php');
$connect=Conex::conectar();
$id=$_GET['id'];
$sql=" update usuario set borrar = '1' where id = '$id'";
$resultado = $connect->query($sql);
header('location: ../vistas/cerrar_destroy.php');
?>