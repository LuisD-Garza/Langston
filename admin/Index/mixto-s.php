
<?php
$id = $_GET['id'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$verificarMixto = $mysqli->query("SELECT * FROM `textos` WHERE textos.especial = '$id'");
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
	$subtitulo = utf8_decode($_POST['subtitulo']);
	$imagen = $_FILES['foto']['name'];
	$imagenauxiliar = $mixto['logo'];

	if(empty($imagen))
	{
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE textos SET titulo = '$titulo', descripcion = '$descripcion', subtitulo = '$subtitulo', logo = '$imagenauxiliar' WHERE id = '$id'");
			header("Location: " . $path . "Index/textos.php?accion=e");
		} else {
			$mysqli->query("INSERT INTO textos (titulo, descripcion, logo, subtitulo) VALUES ('$titulo', '$descripcion', '$imagenauxiliar', '$subtitulo')");
			header("Location: " . $path . "Index/textos.php?accion=e");
		}
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		if($cantidadMixto > 0)
		{
			$mysqli->query("UPDATE textos SET titulo = '$titulo', descripcion = '$descripcion', subtitulo = '$subtitulo', logo = '$imagen' WHERE id = '$id'");
			header("Location: " . $path . "Index/textos.php?accion=e");
		} else {
			$mysqli->query("INSERT INTO textos (titulo, descripcion, logo, subtitulo) VALUES ('$titulo', '$descripcion', '$imagenauxiliar', '$subtitulo')");
			header("Location: " . $path . "Index/textos.php?accion=e");		
		}
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'Index/index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<?php
$obtenerCategorias = $mysqli->query("SELECT * FROM `textos` WHERE textos.especial = '$id'");

while($textos = $obtenerCategorias->fetch_assoc())
{
?>
<div class="contenido c_<?php echo $textos['id']; ?>">
	<div class="cabecera">
		<div class="separador">
			<span><?php echo utf8_encode($textos['titulo']); ?></span>
			<img class="flecha f_<?php echo $textos['id']; ?>" src="../down.png" />
		</div>
	</div>

	<div class="restante r_<?php echo $textos['id']; ?>" style="display: none;">
		<div class="objetos">
			<?php
			$idCategoria = $textos['id'];
			$obtenerObjetos = $mysqli->query("SELECT * FROM `textos` WHERE textos.id = '$idCategoria'");
			while($objetos = $obtenerObjetos->fetch_assoc())
			{
			?>
			<div class="objeto P">
				<img src="../../assets/img/<?php echo $objetos['logo']; ?>" />
				<div class="titulo"><?php echo $objetos['titulo']; ?></div>
				<div class="texto"><?php echo $objetos['descripcion']; ?></div>
				<div class="acciones">
			<div onClick="window.location.href='editar_objeto.php?id=<?php echo $objetos['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
			<div onClick="eliminar(<?php echo $objetos['id']; ?>)" class="boton hvr-sweep-to-right" style="background: #e02525;">Eliminar</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<script type="text/javascript">
var activo_<?php echo $textos['id']; ?> = 0;
$(".contenido.c_<?php echo $textos['id']; ?> .cabecera").click(function(){
	if(activo_<?php echo $textos['id']; ?> == 0)
	{
		activo_<?php echo $textos['id']; ?> = 1;
		$(".flecha.f_<?php echo $textos['id']; ?>").attr("src", "../up.png");
		$(".contenido.c_<?php echo $textos['id']; ?> .cabecera").addClass("activo");
	} else {
		activo_<?php echo $textos['id']; ?> = 0;
		$(".flecha.f_<?php echo $textos['id']; ?>").attr("src", "../down.png");
		$(".contenido.c_<?php echo $textos['id']; ?> .cabecera").removeClass("activo");
	}
	$(".restante.r_<?php echo $textos['id']; ?>").toggle("slow");
});
</script>
<?php } ?>
<?php
include("../pie.php");
?>
