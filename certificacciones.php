<!DOCTYPE html>
<html lang="en">
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
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="certificacciones.php">Certificacciones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">   
                <a href="sectores.php" class="nav-link">Sectores</a>
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
   <header class="contenedor-cert-meb">
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
                        <h1 class="main-text text-center">Certificaciones<br> y Membresías</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="body">
            
        <div class="row certificaccion-3">
            <div class="certificaccion-">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 1"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                <h2 class="tittle-cert-1 tittle-cert" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    <?php } ?>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 12"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <img class="pl-5" src="assets/img/<?php echo $rown['img'];?>" alt="">
                <?php } ?>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 1"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <p class="txt-cert-1"><?php echo utf8_encode($rown['descripcion']);?></p>
                <?php } ?>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 1"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <p class="txt-cert-1" ><?php echo utf8_encode($rown['descripcion2']);?><br></p>

                <p class="txt-cert-1"  ><?php echo utf8_encode($rown['descripcion3']);?></p>
                <?php } ?>
                    <div class="cont-img-cert  img-cert-1">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 13"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                         <img class="cap-8" src="assets/img/<?php echo $rown['img'];?>"" alt="">
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                         <img class="cap-7" src="assets/img/<?php echo $rown['img'];?>" alt="">
                        <?php } ?>
                    </div>
                    
            </div>
        </div>
        <div class="row certificaccion-2" >
            <div class="col-3 normal" >
                <img class="img-cert-2" src="assets/img/Capa 11.png">
            </div>
            <div class="col-9 certificaccion- cert-2" >
                <div class="col d-flex align-items-center" >
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 15"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <img src="assets/img/Capa 10.png">
                <h2 class="tittle-cert"><?php echo utf8_encode($rown['titulo']);?></h2>
                <?php } ?>
                </div>
                <div class="col">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 15"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                    <p><?php echo utf8_encode($rown['descripcion']);?></p>
                    <div class="d-flex">
                        <p class="col-6 text-right" ><?php echo utf8_encode($rown['descripcion2']);?></p>
                        <p class="col-6 text-right"><?php echo utf8_encode($rown['descripcion3']);?></p>
                    </div>
                <?php } ?>
                </div>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 15"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <img class="respons" src="assets/img/<?php echo $rown['img'];?>">
                <?php } ?>               
            </div>
        </div>
        <div class="row certificaccion-2" >
            <div class="col-9 certificaccion- cert-2" >
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 16"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <div class="col d-flex align-items-center justify-content-end" >
                <h2 class="tittle-cert"><?php echo utf8_encode($rown['titulo']);?></h2><img src="assets/img/Capa 13.png">
                </div>
                <div class="col text-start">
                    <p><?php echo utf8_encode($rown['descripcion']);?></p>

                    <p><?php echo utf8_encode($rown['descripcion2']);?> </p>

                    <p><?php echo utf8_encode($rown['descripcion3']);?></p>
      
                </div>
                <?php } ?>  
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 17"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <img src="assets/img/<?php echo $rown['img'];?>" class="respons">
                <?php } ?>                  
            </div>
            <div class="col-3 normal" >
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 17"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <img src="assets/img/<?php echo $rown['img'];?>">
                <?php } ?>    
            </div>
        </div>
        <div class="row certificaccion-3">
            <div class="certificaccion- text-center">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 18"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <h2 class="tittle-cert-2 tittle-cert" ><?php echo utf8_encode($rown['titulo']);?></h2>
                <img class="pl-5 pt-4 pb-4 img-dela" src="assets/img/<?php echo $rown['img'];?>" alt="">
                <p class="txt-cert-1"><?php echo utf8_encode($rown['descripcion']);?></p>
                <?php } ?>  
            </div>
        </div>
    </div>
</body>
    <?php include('footer.php') ?>
</html>