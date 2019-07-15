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
            <li class="nav-item active">
                <a class="nav-link" href="nosotros.php">Nosotros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="certificacciones.php">Certificacciones</a>
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
<header class="contenedor-nosotros">
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
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 1"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <h1 class="main-text text-center"><?php echo utf8_encode($rown['titulo']);?></h1>
                        <p  class="text-center"><?php echo utf8_encode($rown['descripcion']);?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="body">

        <div class="politica-integrada">
            <div class="txt-politica">
                <h3>Politica Integrada</h3>
            </div>
            <div class="row calidad ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 3"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="txt-calidad">
                    <h2 class="txt-calidad-3">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="cont-calidad">
                    <div class="circulo">
                        <img src="assets/img/<?php echo $rown['img'];?>" alt="">
                    </div>
                    <p class="txt-calidad-2"><?php echo utf8_encode($rown['descripcion']);?></p>
                </div>
                <?php } ?>
            </div>
            <div class="row seguridad">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 4"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="txt-seguridad">
                    <h2 class="txt-calidad-3">
                         <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="cont-seguridad">
                    <div class="circulo-2">
                        <img src="assets/img/<?php echo $rown['img'];?>" alt="">
                    </div>
                    <p class="txt-seguridad-2"><?php echo utf8_encode($rown['descripcion']);?></p>
                </div>
                <?php } ?>
            </div>
            <div class="row calidad ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 5"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="txt-inocuidad">
                    <h2 class="txt-calidad-3">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="cont-calidad">
                    <div class="circulo">
                        <img src="assets/img/<?php echo $rown['img'];?>" alt="">
                    </div>
                    <p class="txt-calidad-2"><?php echo utf8_encode($rown['descripcion']);?> </p>
                </div>
            <?php } ?>
            </div>
            <div class="row seguridad">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 5"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="txt-seguridad">
                    <h2 class="txt-calidad-3">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="cont-ambiental">
                    <div class="circulo-3">
                        <img src="assets/img/<?php echo $rown['img'];?>" alt="">
                    </div>
                    <p class="txt-amibental-2"><?php echo utf8_encode($rown['descripcion']);?>  </p>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="mvv text-white">
            <div class="row ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 7"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="col cont-mvv">
                    <div class="txt-mision">
                        <h2 class="txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    </div>
                    <p class="desct-txt">
                        <?php echo utf8_encode($rown['descripcion']);?> 
                    </p>
                </div>
                <div class="col cont-img-mission"><img class="img-mission" src="assets/img/<?php echo $rown['img'];?>" alt="">
                </div>
            <?php } ?>
            </div>
            <div class="row ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 8"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="col cont-mvv">
                    <div class="txt-mision">
                        <h2 class="txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    </div>
                    <p class="desct-txt">
                        <?php echo utf8_encode($rown['descripcion']);?> 
                    </p>
                </div>
                <div class="col cont-img-mission"><img class="img-mission" src="assets/img/<?php echo $rown['img'];?>" alt="">
                </div>
                <?php } ?>
            </div>
            <div class="row ">
                <div class="col cont-mvv">
                    <div class="txt-mision">
                    <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 9"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <h2 class="txt-head-mvv"><?php echo utf8_encode($rown['titulo']);?></h2>
                    <?php } ?>
                    </div>
                    <h3 class="txt-list-mvv" ><?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 10"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> <?php echo utf8_encode($rown['titulo']);?>              <?php } ?> </h3>
                    <h3 class="txt-list-mvv" ><?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 11"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> <?php echo utf8_encode($rown['titulo']);?>              <?php } ?> </h3>
                    <h3 class="txt-list-mvv" ><?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 12"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> <?php echo utf8_encode($rown['titulo']);?>              <?php } ?> </h3>
                    <h3 class="txt-list-mvv" ><?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 13"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> <?php echo utf8_encode($rown['titulo']);?>              <?php } ?> </h3>
                    <h3 class="txt-list-mvv" ><?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> <?php echo utf8_encode($rown['titulo']);?>              <?php } ?> </h3>
                </div>
                <div class="col cont-img-mission"><?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 9"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?><img class="img-mission-1" src="assets/img/<?php echo $rown['img'];?>" alt=""><?php } ?>
                </div>
            </div>
        </div>
</div>
    <?php include('footer.php') ?>
</body>

</html>