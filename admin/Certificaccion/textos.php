<?php
$id = $_GET['id'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM `certificaccion` WHERE certificaccion.id = '$id'");
$mixto = $verificarMixto->fetch_assoc();
$cantidadMixto = $verificarMixto->num_rows;
$required = 'required';
if(isset($_POST['titulo']) && isset($_POST['descripcion']))
{
	$id = $mixto['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	
	$descripcion2 = utf8_decode($_POST['descripcion2']);
	

	$descripcion3 = utf8_decode($_POST['descripcion3']);


	$subtitulo = utf8_decode($_POST['subtitulo']);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['img'];


	if(empty($imagen))
	{
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE certificaccion SET titulo = '$titulo', descripcion = '$descripcion', descripcion2 = '$descripcion2', descripcion3 = '$descripcion3', img = '$imagenauxiliar' WHERE id = '$id'");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO certificaccion (titulo, descripcion, descripcion2, descripcion3, img) VALUES ('$titulo', '$descripcion', '$descripcion2', '$descripcion3' '$imagenauxiliar')");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE certificaccion SET titulo = '$titulo', descripcion = '$descripcion', descripcion2 = '$descripcion2', descripcion3 = '$descripcion3', img = '$imagen' WHERE id = '$id'");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO certificaccion (titulo, descripcion, descripcion2, descripcion3, img) VALUES ('$titulo', '$descripcion', '$descripcion2', '$descripcion3' '$imagenauxiliar')");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");		
		}
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'Certificaccion/index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<div class="objetos">
	<?php
	$obtenerCategorias = $mysqli->query("SELECT * FROM `certificaccion` WHERE certificaccion.categoria = '$id'");
	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<div class="titulo"><img src="../../assets/img/<?php echo $categorias['img']; ?>" /></div>
		<div class="acciones">
			<div onClick="window.location.href='editar_categoria.php?id=<?php echo $categorias['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
			<div onClick="eliminar(<?php echo $categorias['id']; ?>)" class="boton hvr-sweep-to-right" style="background: #e02525;">Eliminar</div>
		</div>
	</div>
	<?php } ?>

	<script type="text/javascript">
	function eliminar(d)
	{
		if(confirm("¿Desea eliminar esta categoria?"))
		{
			window.location.href = "<?php echo $path; ?>eliminar_categoria.php?id=" + d;
		}
	}
	</script>
</div>
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($mixto['titulo']); ?>" <?php $required ?> />
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción:</div>
		<textarea name="descripcion" ><?php echo utf8_encode($mixto['descripcion']); ?></textarea>
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción 2:</div>
		<textarea name="descripcion2" ><?php echo utf8_encode($mixto['descripcion2']); ?></textarea>
	</div>


	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción 3:</div>
		<textarea name="descripcion3" ><?php echo utf8_encode($mixto['descripcion3']); ?></textarea>
	</div>


	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("../pie.php");
?>
