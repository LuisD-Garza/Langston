<?php
require_once("../nucleo.php");

if($login == false)
{
	header("Location: $path");
}

$id = $_GET['id'];
$obtenerObjeto = $mysqli->query("SELECT * FROM `productos` WHERE id = '$id'");
$objeto = $obtenerObjeto->fetch_assoc();
$id2 = $objeto['id_categoria'];

$id_producto + $objeto['id'];
if(isset($_POST['titulo']))
{
	$tipotela = utf8_decode($_POST['tipotela']);
	$color = utf8_decode($_POST['color']);
	$peso = utf8_decode($_POST['peso']);
	$diseño = utf8_decode($_POST['diseño']);
	$acabado = utf8_decode($_POST['acabado']);
	$titulo = utf8_decode($_POST['titulo']);
	$imagen = $_FILES['foto']['name'];

	if(empty($imagen))
	{
		$mysqli->query("UPDATE productos SET nombre = '$titulo', img = '$imagen' WHERE id = '$id'");
		header("Location: " . $path . "productos/editar_producto.php?id=$id&accion=e");
	} else {
		copy($_FILES['foto']['tmp_name'], '../../assets/img/'.$imagen);
		$mysqli->query("UPDATE  productos SET nombre = '$titulo', img = '$imagen' WHERE id = '$id'");
		header("Location: " . $path . "productos/editar_producto.php?id=$id&accion=e");
	}
}

include("../cabecera.php");
?>
<div class="titulo">Editar objeto</div>
<div class="linea"></div>
<div class="accion">
	<div onClick="window.location.href='<?php echo $path.'productos/productos.php'; ?>'" class="boton hvr-sweep-to-right">Regresar</div>
</div>
<img src="../../assets/img/<?php echo $objeto['img']; ?>" />
<form class="login logindos" action="" method="POST" enctype="multipart/form-data">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
		<input type="file" name="foto" />
	</div>	

	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Nombre:</div>
		<input type="text" name="titulo" value="<?php echo utf8_encode($objeto['nombre']); ?>" required />
	</div>

	<input type="submit" value="Guardar" style="" />
</form>
<div class="container">
<div class="row pb-5 justify-content-around ">
<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Diseños agregados:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
			<?php 
				require_once("../nucleo.php");
				$id_producto + $objeto['id'];
				$select7 = mysqli_query($mysqli,"SELECT * FROM dis WHERE id_producto = ".$objeto['id']."");
				while($rown2 = mysqli_fetch_array($select7)){
				?>
				<form action="eliminarsubcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $rown2['id_producto'];?> ">
						</td>
                        <td>
							<input  name="name_bd"  type='hidden' value="dis">
                        </td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
						<td>
							<span class="input-group-text" name="nombre" id="inputGroup-sizing-default"><?php echo$rown2['nombre']  ?></span>
						</td>
						<td>
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</td>
					</tr>
				</form>
			<?php } ?>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Acabados agregados:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
			<?php 
				require_once("../nucleo.php");
				$id_producto + $objeto['id'];
				$select7 = mysqli_query($mysqli,"SELECT * FROM acabado WHERE id_producto = '".$objeto['id']."'");
				while($rown2 = mysqli_fetch_array($select7)){
				?>
				<form action="eliminarsubcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $rown2['id_producto'];?> ">
						</td>
                        <td>
							<input  name="name_bd"  type='hidden' value="acabado">
                        </td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
						<td>
							<span class="input-group-text" name="nombre" id="inputGroup-sizing-default"><?php echo$rown2['nombre']  ?></span>
						</td>
						<td>
							<input type="submit" class="btn btn-danger"  value="Eliminar">
						</td>
					</tr>
				</form>
			<?php } ?>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Pesos agregados:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
			<?php 
				require_once("../nucleo.php");
				$id_producto + $objeto['id'];
				$select7 = mysqli_query($mysqli,"SELECT * FROM peso WHERE id_producto = '".$objeto['id']."'");
				while($rown2 = mysqli_fetch_array($select7)){
				?>
				<form action="eliminarsubcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $rown2['id_producto'];?> ">
						</td>
                        <td>
							<input  name="name_bd"  type='hidden' value="peso">
                        </td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
						<td>
							<span class="input-group-text" name="nombre" id="inputGroup-sizing-default"><?php echo$rown2['nombre']  ?></span>
						</td>
						<td>
							<input type="submit" class="btn btn-danger"  value="Eliminar">
						</td>
					</tr>
				</form>
			<?php } ?>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Tipo de tela agregadas:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
			<?php 
				require_once("../nucleo.php");
				$id_producto + $objeto['id'];
				$select7 = mysqli_query($mysqli,"SELECT * FROM tipotela WHERE id_producto = '".$objeto['id']."'");
				while($rown2 = mysqli_fetch_array($select7)){
				?>
				<form action="eliminarsubcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $rown2['id_producto'];?> ">
						</td>
                        <td>
							<input  name="name_bd"  type='hidden' value="tipotela">
                        </td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
						<td>
							<span class="input-group-text" name="nombre" id="inputGroup-sizing-default"><?php echo$rown2['nombre']  ?></span>
						</td>
						<td>
							<input type="submit" class="btn btn-danger"  value="Eliminar">
						</td>
					</tr>
				</form>
			<?php } ?>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Colores agregados:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
			<?php 
				require_once("../nucleo.php");
				$id_producto + $objeto['id'];
				$select7 = mysqli_query($mysqli,"SELECT * FROM color WHERE color.id_producto = '".$objeto['id']."'");
				while($rown2 = mysqli_fetch_array($select7)){
				?>
				<form action="eliminarsubcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $rown2['id_producto'];?> ">
						</td>
                        <td>
							<input  name="name_bd"  type='hidden' value="color">
                        </td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
						<td>
							<span class="input-group-text" name="nombre" id="inputGroup-sizing-default"><?php echo$rown2['nombre']  ?></span>
						</td>
						<td>
							<input type="submit" class="btn btn-danger"  value="Eliminar">
						</td>
					</tr>
				</form>
			<?php } ?>
		</table>
	</div>
</div>
</div>

<div class="row pt-5 justify-content-around">
<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Agregar diseño:</div>
	</div>	
	<div class="seccion cnt">
		<table align="center">
				<form action="agregarcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $objeto['id'];?> ">
						</td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
                        <td>
							<input  name="name_bd"  type='hidden' value="dis">
                        </td>
						<td>
							<input type="text" class="form-control"  name="nombre" value="<?php echo$rown2['nombre']  ?>">
						</td>
						<td>
							<input type="submit" class="btn btn-success" value="Guardar" style="" />
						</td>
					</tr>
				</form>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Agregar acabado:</div>
	</div>
	<div class="seccion cnt">
		<table align="center">
				<form action="agregarcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $objeto['id'];?> ">
						</td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
                        <td>
							<input  name="name_bd"  type='hidden' value="acabado">
                        </td>
						<td>
							<input type="text" class="form-control"  name="nombre" value="<?php echo$rown2['nombre']  ?>">
						</td>
						<td>
							<input type="submit" class="btn btn-success" value="Guardar" style="" />
						</td>
					</tr>
				</form>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4 pb-5">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Agregar peso:</div>
	</div>
	<div class="seccion cnt">
		<table align="center">
				<form action="agregarcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $objeto['id'];?> ">
						</td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
                        <td>
							<input  name="name_bd"  type='hidden' value="peso">
                        </td>
						<td>
							<input type="text"  class="form-control" name="nombre" value="<?php echo$rown2['nombre']  ?>">
						</td>
						<td>
							<input type="submit" class="btn btn-success" value="Guardar" style="" />
						</td>
					</tr>
				</form>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Agregar tipo de tela:</div>
	</div>
	<div class="seccion cnt">
		<table align="center">
				<form action="agregarcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $objeto['id'];?> ">
						</td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
                        <td>
							<input  name="name_bd"  type='hidden' value="tipotela">
                        </td>
						<td>
							<input type="text" name="nombre"  class="form-control" value="<?php echo$rown2['nombre']  ?>">
						</td>
						<td>
							<input type="submit" class="btn btn-success" value="Guardar" style="" />
						</td>
					</tr>
				</form>
		</table>
	</div>
</div>

<div class="in mar20 cnt col-4">
	<div class="campo">
		<div class="titulo" style="padding: 10px 0;">Agregar color:</div>
	</div>
	<div class="seccion cnt">
		<table align="center">
				<form action="agregarcategoria.php" method="POST" enctype="multipart/form-data">
					<tr>
						<td>
							<input  name="id_producto" type='hidden' value=" <?php echo $objeto['id'];?> ">
						</td>
						<td>
							<input  name="id"  type='hidden' value="<?php echo $rown2['id'] ?>">
                        </td>
                        <td>
							<input  name="name_bd"  type='hidden' value="color">
                        </td>
						<td>
							<input type="text"   class="form-control" name="nombre" value="<?php echo$rown2['nombre']  ?>">
						</td>
						<td>
							<input type="submit" class="btn btn-success" value="Guardar" style="" />
						</td>
					</tr>
				</form>
		</table>
	</div>
</div>
</div>
</div>
<?php
include("../pie.php");
?>
