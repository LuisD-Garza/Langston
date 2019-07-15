    <div class="espacioChat">
        <div class="chat" style="display: none;">
        <div class="titulo"><b>Chat</b></div>
        <div class="contenido">dwwd</div>
        <hr style="border: 1px solid white;">
        <form class="fchat" action="" method="POST" style="padding: 0 10px;">
            <input type="text" name="texto" placeholder="Escribe un mensaje..." required/><br>
        </form>
        </div>
        <img class="mensajeChat" src="assets/img/mensaje.png" />
    </div>

         <script type="text/javascript">
    $(".abrirMobile").click(function(){
        $(".contenidoMobile").animate({
            height: "toggle"
        }, 500);
    });

    $(window).resize(function(){
        if($(window).innerWidth() >= 768)
        {
            $(".contenidoMobile").slideUp("slow");
        }
    });

        $('.chat .contenido').animate({
        scrollTop: $(document).height()
    }, 'slow');
$(".fchat").submit(function(e){
    e.preventDefault();
    var t = $("input[name=texto]").val();
    $("input[name=texto]").val("");
    var tip = "cliente";
    $.post("enviarChat.php", {texto: t, tipo: tip, ip: "<?php echo $_SERVER['REMOTE_ADDR']; ?>"});
    $('.chat .contenido').animate({
        scrollTop: $(document).height()
    }, 'slow');

});

function actualizarChat()
{
    $.post("obtenerChat.php", {ip: "<?php echo $_SERVER['REMOTE_ADDR']; ?>"}, function(d){
        oldd = d 


        
        $(".chat .contenido").html(d);
    });
}

setInterval("actualizarChat()", 100);

$(".mensajeChat").click(function(){
    $(".chat").animate({
        height: "toggle"
    }, 300);
    $('.chat .contenido').animate({
        scrollTop: $(document).height()
    }, 'slow');
});
</script>