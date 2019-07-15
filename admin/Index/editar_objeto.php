<?php
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$id = $_GET['id'];
$obtenerObjeto = $mysqli->query("SELECT * FROM `textos` WHERE textos.id = '$id'");
$objeto = $obtenerObjeto->fetch_assoc();

if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);
	$imagen = $_FILES['foto']['name'];

	if(empty($imagen))
	{
		$mysqli->query("UPDATE textos SET titulo = '$titulo', logo = '$imagen' WHERE id = '$id'");
		header("Location: " . $path . "Index/editar_objeto.php?accion=e");
	} else {
		copy($_FILES['foto']['tmp_name'], $imagen);
		$mysqli->query("UPDATE textos SET titulo = '$titulo', logo = '$imagen' WHERE id = '$id'");
		header("Location: " . $path . "Index/editar_objeto.php?id=$id&accion=e");
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar objeto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>Index/mixto-s.php?id=4'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="<?php echo $objeto['logo']; ?>" />
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" />
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($objeto['titulo']); ?>" required />
	</div>


	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
