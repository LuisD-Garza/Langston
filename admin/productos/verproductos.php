<?php
$id = $_GET['id'];
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}
include("../cabecera.php");
?>
<div class="titulo">Categorias</div>
<div class="linea"></div>
<div class="accion">
<?php
	if ($obtenerCategorias = $mysqli->query("SELECT * FROM `producto` WHERE producto.id_subcategoria = '$id'")) {
		$categorias = $obtenerCategorias->fetch_assoc()
	?>
	<div onClick="window.location.href='<?php echo $path.'productos/index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
	<div onClick="window.location.href='<?php echo $path.'productos/nuevoproducto.php?id1='.$categorias['id_categoria'].'&id2='.$id.''; ?>'" class="boton hvr-sweep-to-right">Nuevo producto</div>
	<?php } ?>
</div>
<div class="objetos">
		<?php
	$obtenerCategorias = $mysqli->query("SELECT * FROM `producto` WHERE producto.id_subcategoria = '$id'");
	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<img src="assets/img/<?php echo utf8_encode($categorias['foto']) ?>" alt="">
		<div class="titulo"><?php echo utf8_encode($categorias['nombre']); ?></div>
		<div class="acciones">
			<div onClick="window.location.href='editar_producto.php?id=<?php echo $categorias['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
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
