<?php
require_once("../dbcon.php");
$sql = "INSERT INTO `textos` (`id`, `especial`, `titulo`, `descripcion`, `subtitulo`, `logo`) VALUES (NULL, '5', '', '', '', '');";

if (mysqli_query($mysqli, $sql)) {
      echo "Nuevo espacio a la lista agregado";
      header('Location: index.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}