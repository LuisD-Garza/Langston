<?php
require_once("admin/dbcon.php");

if(isset($_POST['msg']) && isset($_POST['idCliente']))
{
	$msg = $_POST['msg'];
	$idCliente = $_POST['idCliente'];
	$mysqli->query("
		INSERT INTO `mensajes` (`id`, `idUsuario`, `tipoUsuario`, `mensajeUsuario`, `idAdmin`, `horaMensaje`) 
		VALUES (NULL, '$idCliente','1', '$msg', '', '');
		");
}
?>