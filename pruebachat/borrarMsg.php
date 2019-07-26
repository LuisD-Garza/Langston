<?php 
require_once("../admin/dbcon.php");

if(isset($_POST['id']))
{;
	$idCliente = $_POST['id'];
	$mysqli->query("DELETE FROM `mensajes` WHERE `mensajes`.`idUsuario` = $idCliente;");
}

 ?>