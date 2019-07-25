<?php
require_once("../admin/dbcon.php");

if(isset($_POST['msg']) && isset($_POST['id']))
{
	$msg = $_POST['msg'];
	$idCliente = $_POST['id'];
	$mysqli->query("
		INSERT INTO `mensajes` (`id`, `idUsuario`, `tipoUsuario`, `mensajeUsuario`, `idAdmin`, `horaMensaje`) 
		VALUES (NULL, '$idCliente','0', '$msg', '', '');
		");
}
?>