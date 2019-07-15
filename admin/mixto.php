<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM mixto LIMIT 1");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;

if(isset($_POST['titulo']) && isset($_POST['descripcion']))
{
	$id = $mixto['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['logo'];

	if(empty($imagen))
	{
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE mixto SET titulo = '$titulo', descripcion = '$descripcion', logo = '$imagenauxiliar' WHERE id = '$id'");
			header("Location: " . $path . "mixto.php?accion=e");
		} else {
			$mysqli->query("INSERT INTO mixto (titulo, descripcion, logo) VALUES ('$titulo', '$descripcion', '$imagenauxiliar')");
			header("Location: " . $path . "mixto.php?accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], $imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE mixto SET titulo = '$titulo', descripcion = '$descripcion', logo = '$imagen' WHERE id = '$id'");
			header("Location: " . $path . "mixto.php?accion=e");
		} else {
			$mysqli->query("INSERT INTO mixto (titulo, descripcion, logo) VALUES ('$titulo', '$descripcion', '$tipo', '$imagenauxiliar')");
			header("Location: " . $path . "mixto.php?accion=e");		
		}
	}
}

include("cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="<?php echo $mixto['logo']; ?>" />
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" <?php if(empty($mixto['logo'])) { ?>required<?php } ?>/>
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($mixto['titulo']); ?>" required />
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción:</div>
		<textarea name="descripcion" required><?php echo utf8_encode($mixto['descripcion']); ?></textarea>
	</div>

	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
