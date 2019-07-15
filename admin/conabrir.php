<?php
//$con = mysqli_connect("localhost","root","","mercadot_materiales");
 $con = mysqli_connect("localhost","mercadot_materia","materialescen","mercadot_materiales");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>