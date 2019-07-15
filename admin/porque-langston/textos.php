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
if(isset($_POST['titulo']) && isset($_POST['descripcion']))
{
	$id = $mixto['id'];
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);

	$descripcion2 = utf8_decode($_POST['descripcion2']);
	$descripcion2 = str_replace("<br>", '\n', $descripcion2);
	$descripcion2 = str_replace("'", "\'", $descripcion2);

	$descripcion3 = utf8_decode($_POST['descripcion3']);
	$descripcion3 = str_replace("<br>", '\n', $descripcion3);
	$descripcion3 = str_replace("'", "\'", $descripcion3);

	$subtitulo = utf8_decode($_POST['subtitulo']);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['img'];


	if(empty($imagen))
	{
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE porquelangston SET titulo = '$titulo', descripcion = '$descripcion', descripcion2 = '$descripcion2', descripcion3 = '$descripcion3', img = '$imagenauxiliar' WHERE id = '$id'");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO porquelangston (titulo, descripcion, descripcion2, descripcion3, img) VALUES ('$titulo', '$descripcion', '$descripcion2', '$descripcion3' '$imagenauxiliar')");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE porquelangston SET titulo = '$titulo', descripcion = '$descripcion', descripcion2 = '$descripcion2', descripcion3 = '$descripcion3', img = '$imagen' WHERE id = '$id'");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");
		} else {
			$mysqli->query("INSERT INTO porquelangston (titulo, descripcion, descripcion2, descripcion3, img) VALUES ('$titulo', '$descripcion', '$descripcion2', '$descripcion3' '$imagenauxiliar')");
			header("Location: " . $path . "Certificaccion/textos.php?id=$id&accion=e");		
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
<div class="objetos">
	<?php
	$obtenerCategorias = $mysqli->query("SELECT * FROM `porquelangston` WHERE porquelangston.categoria = '$id'");
	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<div class="titulo"><?php echo $categorias['titulo']; ?></div>
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
<?php
include("../pie.php");
?>
