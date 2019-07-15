<?php
require_once("../dbcon.php");
$nombre = $_POST['nombre'];
$nombre_bd = $_POST['name_bd'];
$id = $_POST['id'];
$id_producto = $_POST['id_producto'];


$sql = "INSERT INTO `$nombre_bd` (`id`, `nombre`, `id_producto`) VALUES (NULL, '$nombre', '$id_producto')";
if (mysqli_query($mysqli, $sql)) {
      header('Location: editar_producto.php?id='.$id_producto.'');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}