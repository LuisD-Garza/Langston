<?php
if(empty($_GET['accion']))
{
	$_GET['accion'] = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="UTF-8" />

	<script src="//code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
	@import url(hover.css);
	@import url(https://fonts.googleapis.com/css?family=Muli);
	* { font-family: Muli; margin: 0; }
	.arriba { padding: 10px 0; background: black; color: white; font-size: 25px; font-weight: bold; }
	.arriba .separador { margin: 0 3%; }
	.titulo { color: black; font-weight: bold; font-size: 23px; }

	center .separador { margin-top: 3%; }

	.login { display: flex; width: 100%; align-items: flex-start; flex-direction: column;  }
	.login .campo { margin-top: 2%; font-size: 18px; display: flex; justify-content: flex-start; align-items: center; }
	.login .campo input, .login .campo select {margin-left: 5%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;}
	.login textarea { width: 80% !important; margin-left: 5%; height: 250px !important; border-radius: 5px; border: 1px solid #ccc; }
	.login input[type=submit] { background: black; border: none; padding: 5px 10px; color: white; font-size: 18px; margin-top: 2%; }
	.linea  {margin: 2% 0; display:block; width:100%; border:none; color:white; height:1px; background:black; background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 350, from(#000), to(#fff)); }
	.texto { color: black; font-size: 16px; padding: 10px 0; }
	.botones { padding: 20px 0; display: flex; width: 100%; justify-content: space-around; flex-wrap: wrap; }
	.botones .boton { cursor: pointer; margin: 1% 5%; background: black; width: 20%; padding: 15px; text-align: center; color: white; font-size: 18px; font-weight: bold; }

	.accion { width: 90%; display: flex; justify-content: flex-end; align-items: center;}
	.accion .boton { cursor: pointer; margin: 0 0.5%; background: black;  padding: 10px 40px; text-align: center; color: white; font-size: 15px; font-weight: bold;  }

	.objetos {  padding: 20px 0; display: flex; width: 100%; justify-content: space-around; flex-wrap: wrap; }
	.objetos .objeto.G { margin: 1%; width: 45%; }
	.objetos .objeto.P { margin: 1%; width: 30%; }
	.objetos .objeto.P .acciones { justify-content: center; }
	.objetos img { width: 100%;  }
	.objetos .objeto.P img { max-width: 50%; }
	.objetos .titulo { padding: 5px 0; color: black; font-size: 20px; }
	.objetos .texto { padding: 5px 0; color: black; font-size: 16px; }
	.objetos .acciones { padding: 10px 0; display: flex; justify-content: flex-end; align-items: center; }
	.objetos .acciones .boton { cursor: pointer; margin: 0 0.5%; background: black;  padding: 10px 40px; text-align: center; color: white; font-size: 12px; font-weight: bold;  }

	.contenido { background: #DCDCDC; width: 90%; margin-bottom: 4%;}
	.contenido:hover .cabecera { background: black; }
	.contenido .cabecera { cursor: pointer; background: gray; color: white; font-size: 18px; }
	.contenido .cabecera.activo { background: black; }
	.contenido .cabecera .separador { padding: 15px; display: flex; justify-content: space-between; align-items: center; }

	.cerrar { width: 100%; font-size: 16px; text-decoration: none;}
	.cerrar img { padding-right: 5px; }
	.cerrar a {color: #FF0000;cursor: pointer;  text-decoration: none; }
	.cerrar a:hover { text-decoration: underline; }
	.cerrar .separador { padding: 20px; display: flex; align-items: center; justify-content: flex-end; }

	.logindos { display: block; }
	.logindos .campo { flex-direction: column; width: 100%; }
	.logindos input[type=submit] { margin-bottom: 10%; background: #f3c426; height: 50px; padding: 10px 20px; }
	.logindos input[type=file], .logindos select { width: 80%; padding: 0; font-size: 15px; }
	.logindos input[type=text] { width: 80%; padding: 0; font-size: 25px; }
	.logindos textarea { padding: 0; font-size: 25px; }
	.logindos img {  }

	.e { display: none; z-index: 9999; width: 100%; padding: 20px 0; font-size: 25px; background: #15BD4D; text-align: center; color: white; position: fixed; top: 0;}
	</style>
</head>
<body>
	<?php if($_GET['accion'] == "e") { ?>
	<div class="e">Tus datos han sido actualizados / insertados en la base de datos.</div>
	
	<script type="text/javascript">
	$(".e").toggle("slow");
	window.history.pushState(null, null, "<?php echo $_SERVER['SCRIPT_NAME']; ?>");

	setTimeout(function(){
		$(".e").toggle("slow");
	}, 4000);
	</script>
	<?php } ?>

	<div class="arriba">
		<div class="separador">Administrador</div>
	</div>

	<?php if($login == true) { ?>
	<div class="cerrar"><div class="separador"><img src="cerrar.png" /><a href="<?php echo $path; ?>salir.php">Cerrar sesión</a></div></div>
	<?php } ?>
	<center>
		<div class="separador">