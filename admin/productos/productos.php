
<?php
require_once("../dbcon.php");



include("../cabecera.php");
?>
<div class="titulo">Editar mixto</div>
<div class="linea"></div>
<div class="accion">

</div>
<div class="accion">
	
</div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'agregar_producto.php'; ?>'" class="boton hvr-sweep-to-right">Agregar Producto</div>
	<div onClick="window.location.href='<?php echo $path.'index.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<?php
$obtenerCategorias = $mysqli->query("SELECT * FROM `productos` ");

while($textos = $obtenerCategorias->fetch_assoc())
{
?>
<div class="contenido c_<?php echo $textos['id']; ?>">
	<div class="cabecera">
		<div class="separador">
			<span><?php echo utf8_encode($textos['nombre']); ?></span>
			<img class="flecha f_<?php echo $textos['id']; ?>" src="../down.png" />
		</div>
		<div class="accion">
		<div onClick="window.location.href='editar_producto.php?id=<?php echo utf8_encode($textos['id']) ?>'; " class="boton hvr-sweep-to-right">Editar Producto</div>
		<div onClick="window.location.href='eliminar_producto.php?id=<?php echo utf8_encode($textos['id']) ?>'; " class="boton hvr-sweep-to-right">Eliminar Producto</div>
</div>

	</div>

	<div class="restante r_<?php echo $textos['id_categoria']; ?>" style="display: none;">
		
	</div>
</div>

<script type="text/javascript">
var activo_<?php echo $textos['id_categoria']; ?> = 0;
$(".contenido.c_<?php echo $textos['id_categoria']; ?> .cabecera").click(function(){
	if(activo_<?php echo $textos['id_categoria']; ?> == 0)
	{
		activo_<?php echo $textos['id_categoria']; ?> = 1;
		$(".flecha.f_<?php echo $textos['id_categoria']; ?>").attr("src", "../up.png");
		$(".contenido.c_<?php echo $textos['id_categoria']; ?> .cabecera").addClass("activo");
	} else {
		activo_<?php echo $textos['id_categoria']; ?> = 0;
		$(".flecha.f_<?php echo $textos['id_categoria']; ?>").attr("src", "../down.png");
		$(".contenido.c_<?php echo $textos['id_categoria']; ?> .cabecera").removeClass("activo");
	}
	$(".restante.r_<?php echo $textos['id_categoria']; ?>").toggle("slow");
});
</script>
<?php } ?>
<?php
include("../pie.php");
?>
