<?php 
require_once("../admin/dbcon.php");

if(isset($_POST['id']))
{
	$idCliente = $_POST['id'];
	$selectcii = mysqli_query($mysqli,"SELECT * FROM `registroschat` WHERE id = $idCliente"); 
 	while($rown = mysqli_fetch_array($selectcii)){
     		$m = $rown['correoCliente'];
     		echo($m);
		};
}


 ?>