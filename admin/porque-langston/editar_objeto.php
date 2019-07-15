<?php
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$id = $_GET['id'];
$obtenerObjeto = $mysqli->query("SELECT * FROM `porquelangston` WHERE porquelangston.id = '$id'");
$objeto = $obtenerObjeto->fetch_assoc();
$descripcion = utf8_decode($_POST['descripcion']);
$descripcion = str_replace("<br>", '\n', $descripcion);
$descripcion = str_replace("'", "\'", $descripcion);

if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);
	$imagen = $_FILES['foto']['name'];

	if(empty($imagen))
	{
		$mysqli->query("UPDATE porquelangston SET titulo = '$titulo', img = '$imagen', descripcion = '$descripcion' WHERE id = '$id'");
		header("Location: " . $path . "Nosotros/editar_objeto.php?id=$id&accion=e");
	} else {
		copy($_FILES['foto']['tmp_name'], $imagen);
		$mysqli->query("UPDATE porquelangston SET titulo = '$titulo', img = '$imagen', descripcion = '$descripcion' WHERE id = '$id'");
		header("Location: " . $path . "Nosotros/editar_objeto.php?id=$id&accion=e");
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar objeto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>Nosotros/mixto-s.php?id=3" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="<?php echo $objeto['img']; ?>" />
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" />
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($objeto['titulo']); ?>" required />
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción:</div>
		<textarea name="descripcion" ><?php echo utf8_encode($objeto['descripcion']); ?></textarea>
	</div>


	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
