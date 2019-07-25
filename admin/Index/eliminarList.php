<?php
require_once("../nucleo.php");

	$id = $_GET['id'];
	if ($mysqli->query("DELETE FROM textos WHERE id = '$id'")) {
		header("Location: " . $path . "Index/list.php?id=5");
	};
	

?>