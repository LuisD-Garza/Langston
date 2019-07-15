<?php
$nombre = $_GET['nombre'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}


include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">
	<div class="accion">
	<div onClick="window.location.href='<?php $nombre = $_GET['nombre']; echo $path.'productos/agregarcategoria.php?nombre='.$nombre.''; ?>'" class="boton hvr-sweep-to-right">Agregar Categoria</div>
	<div onClick="window.location.href='<?php echo $path.'productos/index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
</div>
<div class="objetos">
	<?php
	$obtenerCategorias = $mysqli->query("SELECT * FROM `$nombre` ");
	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<div class="titulo"><?php echo $categorias['nombre']; ?></div>
		<div class="acciones">
			<div onClick="window.location.href='editar_categoria.php?id=<?php echo $categorias['id']; ?>&nombre=<?php echo $nombre ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
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
