<?php
require_once("../nucleo.php");
$nombre = $_POST['nombre'];
$nombre_bd = $_POST['name_bd'];
$id = $_POST['id'];
$id_producto = $_POST['id_producto'];

	if ($mysqli->query("DELETE FROM `$nombre_bd` WHERE id = $id")) {
		header('Location: editar_producto.php?id='.$id_producto.'');
	}else{
		echo "algo salo mal";
	};
	

?>