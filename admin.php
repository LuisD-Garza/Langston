<?php
require_once("admin/dbcon.php");
?>
<!DOCTYPE html>
<html lang="en" style="height:100%">

<head>

	<?php include('head.php')	 ?>

  	<title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body style="height:100%">

  <div class="d-flex" id="wrapper" style="height:100%">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="width: 25%">
      <div class="sidebar-heading text-center p-3 h3" >Chats</div>
      <div class="list-group list-group-flush">
        <?php include('admin/dbcon.php');
        $selectcii = mysqli_query($mysqli,"SELECT * FROM `registroschat` "); 
        while($rown = mysqli_fetch_array($selectcii)){
        ?>
        <a href="#" id="<?php echo utf8_encode($rown['id']); ?>" onclick="saludar('<?php echo utf8_encode($rown['id']); ?>')" class="list-group-item list-group-item-action bg-light"><?php  echo utf8_encode($rown['nombreCliente']); ?></a>
    	<?php } ?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" style="width: 100%">

<!-- canvas-orange.jgp // prism.png  -->
<nav class="navbar navbar-expand-lg navbar-dark menu" style="z-index:99999999999999999999;background-image: url('assets/img/prism.png'); " style="width: 100%">
    <a href="" class="navbar-brand">
        <img src="assets/img/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Langston
    </a>
    <!-- Hamburgesa -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponse" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navResponse">
        <div class="navbar-nav text-white d-flex justify-content-around" style="width: 100%">
        </div>
    </div>
</nav>

    <div class="container-fluid" style="height: 91%">
    	<div class="caja-msg" style="height:90%; overflow-x: auto; padding:20px;">
    		
    	</div> 
    	<form  class="text-center" action="">
    		<div class="form-grup">
    			<input class="" id="idCliente" type="text" value=''>
    			<input type="text" class="" id="msg-idusuario">
    			<input class="form-control d-inline-block input-msg" style="width: 40%" type="text" placeholder="Ingrese su mensaje...">
    			<button class="btn btn-dark" id="btn-msg-admin" ><i class="fas fa-paper-plane"></i></button>
    		</div>
    	</form>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

<script>
	

		$('#btn-msg-admin').on('click', function(){
			msg = $('.input-msg').val();
			id = $('#msg-idusuario').val();
			$.post("pruebachat/enviarChat.php", {msg:msg, id:id}, function(data){
				$('.input-msg').val('');
			})
		})

		function saludar(id){
			$('#msg-idusuario').val(id);
    	$.post("pruebachat/obtenerChat.php", {id: id}, function(d){
        	oldd = d 
        	console.log(d);
        	$(".caja-msg").html(d);
        	setInterval(function(id){
				var lastIdMsg = localStorage.getItem('id');
				idUsuario = $('#idCliente').val();
				$.post("pruebachat/nuevoMsg.php", {lastIdMsg: lastIdMsg, idUsuario: idUsuario}, function(d){
    		   		oldd = d 
         			$('.caja-msg').append(d);
    	 		});

			}, 2500);
    	});
		}
	
</script>

</html>
