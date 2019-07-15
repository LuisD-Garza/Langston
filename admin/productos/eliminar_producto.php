<?php
require_once("../nucleo.php");

	$id = $_GET['id'];
	if ($mysqli->query("DELETE FROM productos WHERE id = $id")) {
		header("Location: " . $path . "/index.php");
	}else{
		echo "algui salo mal";
	};
	

?>