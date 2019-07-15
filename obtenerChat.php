<?php
require_once("nucleo.php");
echo '<div style="padding: 10px;">';
if(isset($_POST['ip']))
{
$obtenerMensajes = $mysqli->query("SELECT * FROM mensajes WHERE ipcliente = '" . $_POST['ip'] . "' AND ipadmin = '" . $ipgeneral . "' ORDER BY id");
while($mensajes = $obtenerMensajes->fetch_assoc()){
?>
<div style="border-bottom: 1px solid #26736b;">
<?php if($mensajes['tipo'] == "cliente") { ?>
<b style="letter-spacing: 1px;">Cliente:</b><br>
<?php echo $mensajes['texto']; ?><br><br>
<?php } ?>

<?php if($mensajes['tipo'] == "admin") { ?>
<b style="letter-spacing: 1px;">Langston:</b><br>
<?php echo $mensajes['texto']; ?><br><br>
<?php } ?>
</div><br>
<?php }} ?>
</div>