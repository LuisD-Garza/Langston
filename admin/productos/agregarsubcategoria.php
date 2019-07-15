<?php
$id = $_GET['id'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM `subcategoria` WHERE subcategoria.id_subcategoria = '$id'");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;
$required = 'required';
$id2= $_GET['id'];
if(isset($_POST['titulo']))
{
	$id = $mixto['id_subcategoria'];
	$id2 = $_GET['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);
	$subtitulo = utf8_decode($_POST['subtitulo']);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['img'];

	if(empty($imagen))
	{$id2 = $_GET['id'];
		if(false)
		{
			$mysqli->query("UPDATE subcategoria SET descripcion = '$titulo' WHERE id_subcategoria = '$id'");
			header("Location: " . $path . "productos/editar_categoria.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO subcategoria (descripcion, id_categoria) VALUES ('$titulo', '$id2')");
			header("Location: " . $path . "productos/agregarsubcategoria.php?id=$id2&accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE nosotros SET titulo = '$titulo'WHERE id = '$id'");
			header("Location: " . $path . "Nosotros/editar_texto.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO nosotros (titulo) VALUES ('$titulo')");
			header("Location: " . $path . "Nosotros/editar_texto.php?id=$id&accion=e");		
		}
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'productos/categoria.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="" <?php $required ?> />
	</div>

	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
