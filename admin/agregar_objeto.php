<?php
require_once("nucleo.php");

if($login == false)
{
	header("Location: $path");
}

if(empty($_GET['id_categoria']))
{
	$_GET['id_categoria'] = "";
}
$ic = $_GET['id_categoria'];

if(isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['id_categoria']))
{
	$titulo = utf8_decode($_POST['titulo']);
	$descripcion = utf8_decode($_POST['descripcion']);
	$descripcion = str_replace("<br>", '\n', $descripcion);
	$descripcion = str_replace("'", "\'", $descripcion);
	$idcategoria = utf8_decode($_POST['id_categoria']);
	$imagen = $_FILES['foto']['name'];

	copy($_FILES['foto']['tmp_name'], $imagen);
	$mysqli->query("UPDATE objetos SET titulo = '$titulo', descripcion = '$descripcion', id_categoria = '$idcategoria', imagen = '$imagen' WHERE id = '$id'");
	$mysqli->query("INSERT INTO objetos (titulo, descripcion, id_categoria, imagen) VALUES ('$titulo', '$descripcion', '$idcategoria', '$imagen')");
	header("Location: " . $path . "objetos.php?accion=e");
}

include("cabecera.php");
?>
<div class="titulo">Agregar objeto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path; ?>objetos.php'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" required/>
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Titulo:</div>
		<input type="text" name="titulo" value="" required />
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Descripción:</div>
		<textarea name="descripcion" required></textarea>
	</div>

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Categoria:</div>
		<select name="id_categoria">
		<?php
		$obtenerCategorias = $mysqli->query("SELECT  * FROM categorias");

		while($categorias = $obtenerCategorias->fetch_assoc())
		{
		?>
		<option value="<?php echo $categorias['id']; ?>" <?php if($categorias['id'] == $ic) { ?>selected<?php } ?>><?php echo utf8_encode($categorias['titulo']); ?></option>
	<?php } ?>
		</select>
	</div>

	<input type="submit" value="Guardar" style="" />
</form>

<?php
include("pie.php");
?>
