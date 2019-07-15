<?php
require_once("nucleo.php");
?>

<select name="seleccionarip">
	<?php 
	$oM = $mysqli->query("SELECT DISTINCT ipcliente FROM mensajes");
	while($M = $oM->fetch_assoc()){
		?>
		<option value="<?php echo $M['ipcliente']; ?>"><?php echo $M['ipcliente']; ?></option>
	<?php } ?>
</select><br>

<div class="chat" style="overflow-y: scroll; width: 400px; height: 400px; border: 1px solid black;">sss</div>

<form action="" class="fchat" method="POST">
	<input type="text" name="texto" required/><br>
</form>

<script src="//code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script>
	$('.chat').animate({
    scrollTop: $(document).height()
}, 'slow');

$(".fchat").submit(function(e){
	e.preventDefault();
	var m = $("select[name=seleccionarip] option").val();
	var t = $("input[name=texto]").val();
	var tip = "admin";
	$.post("enviarChat.php", {texto: t, tipo: tip, ip: m});
	$('.chat').animate({
        scrollTop: $(document).height()
    }, 'slow');
});


function actualizarChat()
{
	var m = $("select[name=seleccionarip] option").val();
	$.post("obtenerChat.php", {ip: m,}, function(d){
		$(".chat").html(d);
	});
}

setInterval("actualizarChat()", 100);
</script>