<!DOCTYPE html>
<html>
<head>
    <!--By Luis Garza -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Langston</title>
    <!--Styles-->
    <link rel="stylesheet" href="assets/sass/main.css">
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="assets/js/nab-bar.js" type=""></script>
    <!--Bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" >
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" >
    </script>
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <style>
      body, .body, html { overflow-x: hidden !important; }
    </style> 
</head>
<body>
    <?php include('chat.php') ?>
<nav class="navbar navbar-expand-md navbar-dark bg-navbar-r fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="assets/img/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="menu-collapsed">Langston</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="nosotros.php">Nosotros </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="certificacciones.php">Certificacciones</a>
            </li>
            <li class="nav-item active">   
                <a href="sectores.php" class="nav-link">Sectores<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">   
                <a href="porqueLangston.php" class="nav-link">¿Por qué Langston?</a>
            </li>
            <li class="nav-item">   
                <a href="contact.php" class="nav-link">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
    <header class="contenedor-sect">
        <div class="container cont-cont row pt-5">
            <div class="menu col justify-content-end">
                <div class="col-2 logo">
                    <img src="assets/img/LOGO.png" alt="">
                </div>
                <a id="btn-nosotros" class="btn-menu" href="nosotros.php">Nosotros</a>
                <a id="btn-productos" class="btn-menu" href="productos.php">Productos</a>
                <a id="btn-certifiacciones" class="btn-menu" href="certificacciones.php">Certificaciones</a>
                <a id="btn-sectores" class="btn-menu" href="sectores.php">Sectores</a>
                <a id="btn-porque" class="btn-menu" href="porqueLangston.php">¿Por qué Langston?</a>
                <a id="btn-contacto" class="btn-menu" href="contact.php">Contacto</a>

                <i class="redes face fab fa-facebook-f"></i>
                <i class="redes fab fa-twitter"></i>
                <i class="redes fas fa-envelope"></i>
                <i class="redes fas fa-phone"></i>
            </div>
            <div class="col cont-nosotros pt-0">
                <div class=" cont-header d-flex justify-content-end ">
                    <div class="textos col-12 text center">
                        <h1 class="main-text text-center">Sectores</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="body" >
            
    	<div class="container cont-sectores">
    		<div class="row cont-1-img ">
    			<div class="col cont-alimentos">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    				<img src="assets/img/<?php echo $rown['img'];?>">
    				<h6 class="txt-sect" ><?php echo $rown['titulo'];?></h6>
                    <?php } ?>
    			</div>

    			<div class="col">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    				<img src="assets/img/<?php echo $rown['img'];?>" alt="">
    				<h6><?php echo $rown['titulo'];?></h6>
                    <?php } ?>
    			</div>
    			<div class="col cont-agircultura">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 3"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    				<img src="assets/img/<?php echo $rown['img'];?>" alt="">
    				<h6  class="txt-agric"><?php echo $rown['titulo'];?></h6>
                    <?php } ?>
    			</div>
    		</div>
    		<div class="row cont-2-img">
    			<div class="col">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 4"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    				<img src="assets/img/<?php echo $rown['img'];?>">
    				<h6><?php echo $rown['titulo'];?></h6>
                    <?php } ?>
    			</div>
    			<div class="col">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 5"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    				<img src="assets/img/<?php echo $rown['img'];?>">
    				<h6><?php echo $rown['titulo'];?></h6>
                    <?php } ?>
    			</div>
    		</div>
    	</div>
    </div>
</body>
    <?php include('footer.php') ?>
</html>