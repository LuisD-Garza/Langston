<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarImagenes = $mysqli->query("SELECT * FROM imagenes LIMIT 1");
$imagenes = $verificarImagenes->fetch_assoc();
$cantidadImagenes = $verificarImagenes->num_rows; 

if(isset($_FILES['foto']))
{
	$id = $imagenes['id'];
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $imagenes['logo'];

	copy($_FILES['foto']['tmp_name'], $imagen);
	if($cantidadImagenes > 0)
	{
		$mysqli->query("UPDATE imagenes SET logo = '$imagen' WHERE id = '$id'");
		header("Location: " . $path . "imagenes.php?accion=e");
	} else {
		$mysqli->query("INSERT INTO imagenes (logo) VALUES ('$imagen')");
		header("Location: " . $path . "imagenes.php?accion=e");
	}
}

include("cabecera.php");
?>
<div class="titulo">Editar imagenes</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="<?php echo $imagenes['logo']; ?>" />
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" required />
	</div>	
	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
