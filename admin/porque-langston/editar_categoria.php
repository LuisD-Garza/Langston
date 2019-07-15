<?php
$id = $_GET['id'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM `porquelangston` WHERE porquelangston.id = '$id'");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;
$required = 'required';
if(isset($_POST['titulo']))
{
	$id = $mixto['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);
	$subtitulo = utf8_decode($_POST['subtitulo']);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['img'];

	if(empty($imagen))
	{
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE porquelangston SET titulo = '$titulo' WHERE id = '$id'");
			header("Location: " . $path . "porque-langston/editar_categoria.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO porquelangston (titulo) VALUES ('$titulo')");
			header("Location: " . $path . "porque-langston/editar_categoria.php?id=$id&accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE porquelangston SET titulo = '$titulo' WHERE id = '$id'");
			header("Location: " . $path . "porque-langston/editar_categoria.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO porquelangston (titulo) VALUES ('$titulo')");
			header("Location: " . $path . "porque-langston/editar_categoria.php?id=$id&accion=e");		
		}
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'porque-langston/index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($mixto['titulo']); ?>" <?php $required ?> />
	</div>	

	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
