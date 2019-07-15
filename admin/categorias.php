<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}
include("cabecera.php");
?>
<div class="titulo">Categorias</div>
<div class="linea"></div>
<div class="accion">
	<div class="boton hvr-sweep-to-right" onClick="window.location.href='<?php echo $path; ?>agregar_categoria.php'" style="background: green;">+ Agregar</div>
	<div class="boton hvr-sweep-to-right" onClick="window.location.href='<?php echo $path; ?>categorias_objetos.php'">Regresar</div>
</div>
<div class="objetos">
	<?php
	$obtenerCategorias = $mysqli->query("SELECT  * FROM categorias");

	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<div class="titulo"><?php echo utf8_encode($categorias['titulo']); ?></div>
		<div class="acciones">
			<div onClick="window.location.href='<?php echo $path; ?>editar_categoria.php?id=<?php echo $categorias['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
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
include("pie.php");
?>
