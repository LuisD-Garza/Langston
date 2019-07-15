<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
} else {
	$id = $_GET['id'];
	$mysqli->query("DELETE FROM categorias WHERE id = '$id'");
	header("Location: " . $path . "categorias.php?accion=e");
}
?>