<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM `$nombre` WHERE id = '$id'");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;
$required = 'required';
if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);
	
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['img'];
$id = $_GET['id'];
$nombre = $_GET['nombre'];
	if(empty($imagen))
	{
		if(true)
		{
			$mysqli->query("UPDATE`$nombre` SET nombre = '$titulo' WHERE id = '$id'");
			header("Location: " . $path . "productos/editar_categoria.php?id=$id&nombre=$nombre&accion=e");
		} else {
			$mysqli->query("INSERT INTO `$nombre` (nombre) VALUES ('$titulo')");
			header("Location: " . $path . "productos/editar_categoria.php?id=$id&nombre=$nombre&accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE `$nombre` SET nombre = '$titulo'WHERE id = '$id'");
			header("Location: " . $path . "productos/editar_categoria.php?id=$id&nombre=$nombre&accion=e");
		} else {
			$mysqli->query("INSERT INTO `$nombre` (nombre) VALUES ('$titulo')");
			header("Location: " . $path . "productos/editar_categoria.php?id=$id&nombre=$nombre&accion=e");		
		}
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'productos/categoria.php?nombre='.$nombre.''; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($mixto['nombre']); ?>" <?php $required ?> />
	</div>

	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
