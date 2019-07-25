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
	<div onClick="window.location.href='<?php echo $path.'Nosotros/mixto-s.php?id=3'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<div class="objetos">
	<?php
	$obtenerCategorias = $mysqli->query("SELECT * FROM `nosotros` WHERE nosotros.categoria = '$id' OR nosotros.id ='$id'");
	while($categorias = $obtenerCategorias->fetch_assoc())
	{
	?>
	<div class="objeto P">
		<div class="titulo"><?php echo utf8_encode($categorias['titulo']); ?></div>
		<div class="acciones">
			<?php if ($categorias['id'] == 9 && $categorias['categoria']== 3){ ?>
				<div onClick="window.location.href='editar_objeto.php?id=<?php echo $categorias['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Edita</div>
			<?php }else{ ?>
				<div onClick="window.location.href='editar_categoria.php?id=<?php echo $categorias['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
			<?php 	} ?>
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
