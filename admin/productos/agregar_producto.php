<?php
require_once("../dbcon.php");
$sql = "INSERT INTO `productos` (`id`, `nombre`, `img`, `dis`, `acabado`, `peso`, `tipotela`, `color`) VALUES (NULL, '', '', '', '', '', '', '')";

if (mysqli_query($mysqli, $sql)) {
      header('Location: productos.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}