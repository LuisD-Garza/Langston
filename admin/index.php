<?php
require_once("nucleo.php");

if(isset($_POST['usuario']) && isset($_POST['c']))
{
	$usuario = $_POST['usuario'];
	$c = md5($_POST['c']);

	$verificarUsuario = $mysqli->query("SELECT * FROM admin WHERE usuario = '$usuario' AND c = '$c'")->num_rows;
	if($verificarUsuario > 0)
	{
		$_SESSION['ticket'] = $c;
		header("Location: $path");
	}
}

include("cabecera.php");
?>

<?php if($login == false) { ?>
<div class="titulo">Administrador de sitio web</div>
<form class="login" action="" method="POST">
	<div class="campo">
		<span>Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<input type="text" name="usuario" required />
	</div>

	<div class="campo">
		<span>Contraseña: </span>
		<input type="password" name="c" required />
	</div>

	<input type="submit" value="Ingresar" />
</form>
<?php } else { ?>
<div class="titulo">Bienvenido <span style="color: gray;">admin</span></div>
<div class="linea"></div>
<div class="texto">En esta apartado usted puede administrar las secciones correspondientes a su sitio web, para comenzar seleccione una categoria </div>
<div class="botones">
	<div onClick="window.location.href='<?php echo $path; ?>Index/index.php'" class="boton hvr-sweep-to-right">Index</div>
	<div onClick="window.location.href='<?php echo $path; ?>Nosotros/index.php'" class="boton hvr-sweep-to-right">Nosotros</div>
	<div onClick="window.location.href='<?php echo $path; ?>Certificaccion/index.php'" class="boton hvr-sweep-to-right">Certificacciones</div>
	<div onClick="window.location.href='<?php echo $path; ?>Sectores/index.php'" class="boton hvr-sweep-to-right">Sectores</div>
	<div onClick="window.location.href='<?php echo $path; ?>porque-langston/index.php'" class="boton hvr-sweep-to-right">Por que Langston? </div>
	<div onClick="window.location.href='../admin.php'" class="boton hvr-sweep-to-right">Chat</div>
	<div onClick="window.location.href='<?php echo $path; ?>productos/index.php'" class="boton hvr-sweep-to-right">Productos</div>
</div>
<?php } ?>


			<!--<div class="titulo">Por categoria</div>
			<div class="linea"></div>
			<div class="accion">
				<div class="boton hvr-sweep-to-right">Regresar</div>
			</div>

			<div class="contenido">
				<div class="cabecera">
					<div class="separador">
						<span>CATEGORIA TITULO</span>
						<img class="flecha" src="down.png" />
					</div>
				</div>

				<div class="restante" style="display: none;">
					<br>
					<div class="accion">
						<div class="boton hvr-sweep-to-right" style="background: green;">+ Agregar</div>
					</div>
					<div class="objetos">
						<?php
						for($i = 0; $i < 10; $i++) {?>
						<div class="objeto P">
							<img src="http://aislopuertas.com.mx/admin/inicio/productos/imagenes/puerta-corrediza4.png" />
							<div class="titulo">Titulo de prueba</div>
							<div class="texto">Texto de prueba</div>
							<div class="acciones">
								<div class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
								<div class="boton hvr-sweep-to-right" style="background: #e02525;">Eliminar</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>

			<script type="text/javascript">
			var activo = 0;
			$(".contenido .cabecera").click(function(){
				if(activo == 0)
				{
					activo = 1;
					$(".flecha").attr("src", "up.png");
					$(".contenido .cabecera").addClass("activo");
				} else {
					activo = 0;
					$(".flecha").attr("src", "down.png");
					$(".contenido .cabecera").removeClass("activo");
				}
				$(".restante").toggle("slow");
			});
			</script>-->

			<!--<div class="titulo">Titulo</div>
			<div class="linea"></div>
			<div class="accion">
				<div class="boton hvr-sweep-to-right">Regresar</div>
			</div>
			<img src="http://aislopuertas.com.mx/admin/inicio/proyectos/imagenes/camarablanca2.png" />
			<form class="login logindos" action="" method="POST">
				<div class="campo">
					<div class="titulo" style="padding: 10px 0;">Imagen (0x0):</div>
					<input type="file" name="" required />
				</div>

				<div class="campo">
					<div class="titulo" style="padding: 10px 0;">Titulo:</div>
					<input type="text" name="usuario" required />
				</div>

				<div class="campo">
					<div class="titulo" style="padding: 10px 0;">Titulo con campo grande:</div>
					<textarea name="" required></textarea>
				</div>

				<div class="campo">
					<div class="titulo" style="padding: 10px 0;">Seleccionable:</div>
					<select name="" required>
					</select>
				</div>			
				<input type="submit" value="Guardar" style="" />
			</form>-->

			<!--<div class="titulo">Titulo</div>
			<div class="linea"></div>
			<div class="accion">
				<div class="boton hvr-sweep-to-right" style="background: green;">+ Agregar</div>
				<div class="boton hvr-sweep-to-right">Regresar</div>
			</div>
			<div class="objetos">
				<div class="objeto G">
					<img src="http://aislopuertas.com.mx/admin/inicio/productos/imagenes/puerta-corrediza4.png" />
					<div class="titulo">Titulo de prueba</div>
					<div class="texto">Texto de prueba</div>
					<div class="acciones">
						<div class="boton hvr-sweep-to-right" style="background: #f3c426;">Editar</div>
						<div class="boton hvr-sweep-to-right" style="background: #e02525;">Eliminar</div>
					</div>
				</div>
			</div>-->

<?php
include("pie.php");
?>
