<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
} else {
	$id = $_GET['id'];
	$mysqli->query("DELETE FROM objetos WHERE id = '$id'");
	header("Location: " . $path . "objetos.php?accion=e");
}
?>