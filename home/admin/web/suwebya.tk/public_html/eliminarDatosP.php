<?php 
require_once "conexion.php";
$id=$_POST['id'];

$result=$conn->query("DELETE FROM `programacion_operarios` WHERE `id_programacion`='".$id."'");
echo $result;

?>