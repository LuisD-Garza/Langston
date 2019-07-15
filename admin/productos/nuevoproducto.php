<?php
require_once("../dbcon.php");
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
$fechacreacion = ''.date("Y").'-'.date("N").'-'.date("d").'';
$sql = "INSERT INTO `producto` (`id`, `foto`, `nombre`, `descripcion`, `id_categoria`, `id_subcategoria`, `importante`, `codigo`, `ref`, `precio`) VALUES (NULL, '', '', '', '$id1', '$id2', '', '', '', '');";

if (mysqli_query($mysqli, $sql)) {
      echo "New entri blog created successfully";
      header('Location: index.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}