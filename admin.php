<?php
require_once("nucleo.php");
?>
<title>dwd</title>
<style type="text/css">
	@font-face { font-family: S; src: url(fuentes/S.ttf);  }
	@font-face { font-family: SB; src: url(fuentes/SB.ttf); }
html { scroll-behavior: smooth; }
body { background: #eb5c01; margin: 0; font-family: S, sans-serif; }
input, select { padding: 5px;  font-family: S; width: 100%; letter-spacing: 1px; border: none;  }
.titulo { letter-spacing: 1px; text-transform: uppercase; color: white; text-align: center; padding: 5px 0; font-size: 25px; border-radius: 20px 20px 0 0; }
</style>
<div style="background: transparent; display: flex; justify-content: space-between;">
	<img style="background: white; padding: 10px;" src="assets/img/LOGO.png" />
	<div class="titulos" style="width: 100%; position: relative; top: 10px;">
					<center><div class="titulo"><b>Chat</b></div></center>
					<hr style="border: 1px solid white;">
	</div>
</div>

<select name="seleccionarip" style="border-top: 1px solid #26736b;">
	<?php 
	$oM = $mysqli->query("SELECT DISTINCT ipcliente FROM mensajes");
	while($M = $oM->fetch_assoc()){
		?>
		<option value="<?php echo $M['ipcliente']; ?>"><?php echo $M['ipcliente']; ?></option>
	<?php } ?>
</select><br>

<div class="chat" style="background: white; overflow-y: scroll; width: 100%; height: 75%;">sss</div>

<form action="" class="fchat" method="POST" style="padding: 10px;">
	<input type="text" name="texto" placeholder="Escribe algo..." required/><br>
</form>

<script src="//code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script>
	$('.chat').animate({
    scrollTop: 400000
}, 'slow');

$(".fchat").submit(function(e){
	e.preventDefault();
	var m = $("select[name=seleccionarip] option:selected").val();
	var t = $("input[name=texto]").val();
	var tip = "admin";
	$("input[name=texto]").val("");
	$.post("enviarChat.php", {texto: t, tipo: tip, ip: m});
	$('.chat').animate({
        scrollTop: 400000
    }, 'slow');
});

$("select[name=seleccionarip]").change(function(){
	$('.chat').animate({
        scrollTop: 400000
    }, 'slow');
});


function actualizarChat()
{
	var m = $("select[name=seleccionarip] option:selected").val();
	$("title").html(m);
	$.post("obtenerChat.php", {ip: m,}, function(d){
		$(".chat").html(d);
	});
}

setInterval("actualizarChat()", 100);
</script>