<?php     
require_once("admin/dbcon.php");


if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['fecha']))
{
	$nombre = $_POST['nombre'];
	$id = 'hola';
	$correo = $_POST['correo'];
	$fecha = $_POST['fecha'];

	if ($mysqli->query("SELECT * FROM `registrosChat` WHERE nombreCliente = '$nombre' AND correoCliente = '$correo'")) {
			$selectcii = mysqli_query($mysqli,"SELECT * FROM `registrosChat` WHERE nombreCliente = '$nombre' AND correoCliente = '$correo'"); 
			while($rown = mysqli_fetch_array($selectcii)){
				$id = $rown['id'];
				echo json_encode($id);
			}
	}
	if ($id == "hola") {
		$mysqli->query("INSERT INTO `registroschat` (`id`, `nombreCliente`, `correoCliente`, `fechaCreacion`) VALUES (NULL, '".$nombre."', '".$correo."', '".$fecha."')");
		$selectcii = mysqli_query($mysqli,"SELECT id FROM registroschat ORDER BY id DESC LIMIT 1"); 
		while($rown = mysqli_fetch_array($selectcii)){
			$id = $rown['id'];
			}
			echo json_encode($id);
	}


}else{
	echo "no jalo";
}
?>