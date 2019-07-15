<?php
require_once("../dbcon.php");
$sql = "INSERT INTO `productos` (`id`, `nombre`, `img`, `diseño`, `acabado`, `peso`, `tipotela`, `color`) VALUES (NULL, 'prueba', '', '', '', '', '', '')";

if (mysqli_query($mysqli, $sql)) {
      echo "New entri blog created successfully";
      header('Location: productos.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}