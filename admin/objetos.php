<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}
include("cabecera.php");
?>
<div class="titulo">Objetos</div>
<div class="linea"></div>
<div class="accion">
	<div class="boton hvr-sweep-to-right" onClick="window.location.href='<?php echo $path; ?>categorias_objetos.php'">Regresar</div>
</div>

<?php
$obtenerCategorias = $mysqli->query("SELECT  * FROM categorias");

while($categorias = $obtenerCategorias->fetch_assoc())
{
?>
<div class="contenido c_<?php echo $categorias['id']; ?>">
	<div class="cabecera">
		<div class="separador">
			<span><?php echo utf8_encode($categorias['titulo']); ?></span>
			<img class="flecha f_<?php echo $categorias['id']; ?>" src="down.png" />
		</div>
	</div>

	<div class="restante r_<?php echo $categorias['id']; ?>" style="display: none;">
		<br>
		<div class="accion">
			<div class="boton hvr-sweep-to-right" style="background: green;" onClick="window.location.href='<?php echo $path; ?>agregar_objeto.php?id_categoria=<?php echo $categorias['id']; ?>'">+ Agregar</div>
		</div>
		<div class="objetos">
			<?php
			$idCategoria = $categorias['id'];
			$obtenerObjetos = $mysqli->query("SELECT * FROM objetos WHERE id_categoria = '$idCategoria'");
			while($objetos = $obtenerObjetos->fetch_assoc())
			{
			?>
			<div class="objeto P">
				<img src="<?php echo $objetos['imagen']; ?>" />
				<div class="titulo"><?php echo $objetos['titulo']; ?></div>
				<div class="texto"><?php echo $objetos['descripcion']; ?></div>
				<div class="acciones">
			<div onClick="window.location.href='<?php echo $path; ?>editar_objeto.php?id=<?php echo $objetos['id']; ?>'" class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
			<div onClick="eliminar(<?php echo $objetos['id']; ?>)" class="boton hvr-sweep-to-right" style="background: #e02525;">Eliminar</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<script type="text/javascript">
var activo_<?php echo $categorias['id']; ?> = 0;
$(".contenido.c_<?php echo $categorias['id']; ?> .cabecera").click(function(){
	if(activo_<?php echo $categorias['id']; ?> == 0)
	{
		activo_<?php echo $categorias['id']; ?> = 1;
		$(".flecha.f_<?php echo $categorias['id']; ?>").attr("src", "up.png");
		$(".contenido.c_<?php echo $categorias['id']; ?> .cabecera").addClass("activo");
	} else {
		activo_<?php echo $categorias['id']; ?> = 0;
		$(".flecha.f_<?php echo $categorias['id']; ?>").attr("src", "down.png");
		$(".contenido.c_<?php echo $categorias['id']; ?> .cabecera").removeClass("activo");
	}
	$(".restante.r_<?php echo $categorias['id']; ?>").toggle("slow");
});
</script>
<?php } ?>
	<script type="text/javascript">
	function eliminar(d)
	{
		if(confirm("¿Desea eliminar este objeto?"))
		{
			window.location.href = "<?php echo $path; ?>eliminar_objeto.php?id=" + d;
		}
	}
	</script>
<?php
include("pie.php");
?>
