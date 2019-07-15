<?php
require_once("nucleo.php");

if(isset($_POST['texto']) && isset($_POST['tipo']) && isset($_POST['ip']))
{
	$t = $_POST['texto'];
	$ip = $_POST['ip'];
	$tipo = $_POST['tipo'];
	echo $ipgeneral;
	$mysqli->query("
		INSERT INTO mensajes (ipadmin, ipcliente, texto, tipo, horafecha) 
		VALUES ('" .$ipgeneral . "', '" . $ip ."', '" . $t . "', '" . $tipo . "', '')
		");
}
?>