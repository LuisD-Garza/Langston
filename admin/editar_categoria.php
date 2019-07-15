<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$id = $_GET['id'];
$obtenerCategoria = $mysqli->query("SELECT * FROM categorias WHERE id = '$id'");
$categoria = $obtenerCategoria->fetch_assoc();

if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);

	$mysqli->query("UPDATE categorias SET titulo = '$titulo' WHERE id = '$id'");
	header("Location: " . $path . "categorias.php?accion=e");
}

include("cabecera.php");
?>
<div class="titulo">Editar categoria</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>categorias.php'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($categoria['titulo']); ?>" required />
	</div>		
	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
