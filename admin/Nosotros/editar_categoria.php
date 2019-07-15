<?php
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$id = $_GET['id'];
$obtenerCategoria = $mysqli->query("SELECT * FROM nosotros WHERE nosotros.id = '$id'");
$categoria = $obtenerCategoria->fetch_assoc();

if(isset($_POST['titulo']))
{
	$titulo = utf8_decode($_POST['titulo']);

	$mysqli->query("UPDATE nosotros SET titulo = '$titulo' WHERE id = '$id'");
	header("Location: " . $path . "Nosotros/editar_categoria.php?id=$id&accion=e");
}

include("../cabecera.php");
?>
<div class="titulo">Editar categoria</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'Nosotros'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($categoria['titulo']); ?>" required />
	</div>		
	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
