<?php
require_once("nucleo.php");
include("cabecera.php");

if($login == false)
{
	header("Location: $path");
}
?>
<div class="titulo">Categorias y objetos</div>
<div class="linea"></div>
<div class="accion">
	<div class="boton hvr-sweep-to-right" onClick="window.location.href='<?php echo $path; ?>'">Regresar</div>
</div>
<div class="botones">
	<div onClick="window.location.href='<?php echo $path; ?>categorias.php'" class="boton hvr-sweep-to-right">Categorias</div>
	<div onClick="window.location.href='<?php echo $path; ?>objetos.php'" class="boton hvr-sweep-to-right">Objetos</div>
</div>
<?php
include("pie.php");
?>
