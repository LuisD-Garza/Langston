<?php
require_once("../admin/dbcon.php");
echo '<div class="caja-msg2" style="padding: 10px;">';
if(isset($_POST['id']))
{
$obtenerMensajes = $mysqli->query("SELECT * FROM mensajes WHERE idUsuario = '" . $_POST['id'] . "' ");
while($mensajes = $obtenerMensajes->fetch_assoc()){
?>

<div class="cajita-msg"  style="">

<script type="text/javascript">
	var id = <?php echo $mensajes['id'] ?>;
	localStorage.setItem('id',id);
</script>

<?php if($mensajes['tipoUsuario'] == 1) { ?>
<div class="div" style="    
	display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px solid;
    padding: 10px;
    border-radius: 20px 20px 20px 0px;">
<b style="letter-spacing: 1px;width: 100%; text-align: initial ;">Cliente:</b>
<div class="d-flex justify-content-start align-items-center pr-3" style="width: 100%">
<?php echo $mensajes['mensajeUsuario']; ?>
</div>
</div>
<?php } ?>

<?php if($mensajes['tipoUsuario'] == 0) { ?>
<div class=""  style="    
	display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px solid;
    padding: 10px;
    border-radius: 20px 20px 0px 20px;">
<b style="letter-spacing: 1px; width: 100%; text-align: right;" >Tu:</b>
<div class="d-flex justify-content-end align-items-center pl-3" style="width: 100%;">
	<?php echo $mensajes['mensajeUsuario']; ?>
</div>


<script type="text/javascript">
$( document ).ready(function() {
  var snd = new Audio("../correct-ding.mp3");
  snd.play();
});
</script>



</div>
<?php } ?>

</div><br>
<?php }} ?>
</div>