<?php
require_once("nucleo.php");
if(isset($_POST['ip']))
{
$obtenerMensajes = $mysqli->query("SELECT * FROM mensajes WHERE ipcliente = '" . $_POST['ip'] . "' AND ipadmin = '" . $ipgeneral . "' ORDER BY id");
while($mensajes = $obtenerMensajes->fetch_assoc()){
?>

<?php if($mensajes['tipo'] == "cliente") { ?>
<br>Cliente<br>
<?php echo $mensajes['texto']; ?>
<?php } ?>

<?php if($mensajes['tipo'] == "admin") { ?>
<br>Administrador<br>
<?php echo $mensajes['texto']; ?>
<?php }}} ?>