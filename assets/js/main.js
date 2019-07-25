$(document).ready(function(){
	var texto = $('#hiddentxtSec1').text();
	var posicionPunt = texto.indexOf('.');
	posicionPunt = posicionPunt + 1;
	var textComprimido = texto.substr(0, posicionPunt);
	$('#textSec1').text(textComprimido);

	var textoHistoria = $('#hiddentxt').text();
	var posicionPunto = textoHistoria.indexOf('.');
	posicionPunto = posicionPunto + 1;
	var textHistoriaComprimido = textoHistoria.substr(0, posicionPunto);
	$('#textHistoria').text(textHistoriaComprimido);

	$('#btn-sec1').on('click', function(){
		$('#textSec1').toggleClass('d-none');
	});

	$('#btn-historia').on('click', function(){
		$('#textHistoria').toggleClass('d-none');
	})

	// Chat
	var iconoChat = $(".mensajeChat")
	$('#minimzar').on('click', function(){
		iconoChat.toggleClass('d-none')
    	$(".chat").animate({
        	height: "toggle"
    	}, 300);
    	$('.chat .contenido').animate({
        	scrollTop: $(document).height()
    	}, 'slow');

	})

	iconoChat.click(function(){
		iconoChat.toggleClass('d-none')
    	$(".chat").animate({
        	height: "toggle"
    	}, 300);
    	$('.chat .contenido').animate({
        	scrollTop: $(document).height()
    	}, 'slow');
	});


	$('.registro').on('submit', function(e){
		e.preventDefault();
		register();
	})


	$(".fchat").submit(function(e){
    	e.preventDefault();
    	enviarMsg();
    	$('.chat .contenido').animate({
        	scrollTop: $(document).height()
    	}, 'slow');

});
	function enviarMsg(){
		var idCliente = $('#idCliente').val();
		var msg = $('#msgCliente').val();
		$.ajax({
			url: 'enviarChat.php',
			type: 'POST',
			data: {"msg": msg, "idCliente": idCliente},
			success: function(data){
				$('#msgCliente').val('');
			},
			error: function(data){
				console.log('error '+data);
			}
		})
	}

function obtenerLog(id)
{
    $.post("obtenerChat.php", {ip: id}, function(d){
        oldd = d 
        $(".chat .contenido").html(d);
    });
}

	function register(){
		var nombre = $('#nombreInput').val();
		var correo = $('#emailInput').val();
		var fecha =  2;
		$.ajax({
			url: 'guardarRegistro.php',
			type: 'POST',
			data: {"nombre": nombre, "correo": correo, "fecha": fecha},
			success: function(data, textStatus, xhr) {
				id = data.replace(/['"]+/g, '');
				$('#idCliente').val(data.replace(/['"]+/g, ''));
				$('.registro').removeClass('d-flex');
				$('.registro').toggleClass('d-none');
				obtenerLog(id);

				setInterval(function(id){
					var lastIdMsg = localStorage.getItem('id');
					idUsuario = $('#idCliente').val();
					$.post("nuevoMsg.php", {lastIdMsg: lastIdMsg, idUsuario: idUsuario}, function(d){
    		   			oldd = d 
         				$('.caja-msg').append(d);
    	 			});

				}, 2500);
			},
			error: function(xhr, textStatus, errorThrown) {
				alert("Error al enviar señal");
			}
		})
	}

 $(".abrirMobile").click(function(){

        $('.chat2').on('click',function(){
            $('.chat2').animate({
                height: "0px"
            },500, function(){
                $('.chat2').toggleClass('d-none');
                $('.chat').toggleClass('d-none');
                $('.chat').animate({
                    height: "67%"
                },500, function(){
                    
                });
            });
            
        })
        $('.minimizar').on('click',function(){
            $('.chat').animate({
                height: "0px"
            },500, function(){
                $('.chat').toggleClass('d-none');
                $('.chat').toggleClass('d-none');
                $('.chat').animate({
                    height: "10%"
                },500, function(){
                    
                });
            });
        })

    $(window).resize(function(){
        if($(window).innerWidth() >= 768)
        {
            $(".contenidoMobile").slideUp("slow");
        }
    });

        $('.chat .contenido').animate({
        scrollTop: $(document).height()
    }, 'slow');

});

});

