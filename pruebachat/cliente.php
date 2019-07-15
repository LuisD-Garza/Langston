<?php
require_once("nucleo.php");
?>

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
	var t = $("input[name=texto]").val();
	var tip = "cliente";
	$.post("enviarChat.php", {texto: t, tipo: tip, ip: "<?php echo $_SERVER['REMOTE_ADDR']; ?>"});
	$('.chat').animate({
        scrollTop: $(document).height()
    }, 'slow');
});

function actualizarChat()
{
	$.post("obtenerChat.php", {ip: "<?php echo $_SERVER['REMOTE_ADDR']; ?>"}, function(d){
		$(".chat").html(d);
	});
}

setInterval("actualizarChat()", 100);
</script>