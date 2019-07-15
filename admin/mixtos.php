<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM mixto LIMIT 1");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;

if(isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['tipo']))
{
	$id = $textos['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);

	$tipo = utf8_decode($_POST['tipo']);

	if($cantidadTextos > 0)
	{
		$mysqli->query("UPDATE textos SET titulo = '$titulo', descripcion = '$descripcion', tipo = '$tipo' WHERE id = '$id'");
		header("Location: " . $path . "textos.php?accion=e");
	} else {
		$mysqli->query("INSERT INTO textos (titulo, descripcion, tipo) VALUES ('$titulo', '$descripcion', '$tipo')");
		header("Location: " . $path . "textos.php?accion=e");
	}
}

include("cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="<?php echo $imagenes['logo']; ?>" />
<form class="login logindos" action="" method="POST">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" required />
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($textos['titulo']); ?>" required />
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción:</div>
		<textarea name="descripcion" required><?php echo utf8_encode($textos['descripcion']); ?></textarea>
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Tipo:</div>
		<select name="tipo" required>
			<option value="" disabled <?php if($textos['tipo'] == "") { ?>selected<?php } ?>></option>
			<option value="Pagina web" <?php if($textos['tipo'] == "Pagina web") { ?>selected<?php } ?>>Pagina web</option>
			<option value="Diseño" <?php if($textos['tipo'] == "Diseño") { ?>selected<?php } ?>>Diseño</option>
		</select>
	</div>			
	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
