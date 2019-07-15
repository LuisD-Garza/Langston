<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);

	$mysqli->query("INSERT INTO categorias (titulo) VALUES ('$titulo')");
	header("Location: " . $path . "categorias.php?accion=e");
}

include("cabecera.php");
?>
<div class="titulo">Agregar categoria</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>categorias.php'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="" required />
	</div>		
	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
