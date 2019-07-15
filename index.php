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
            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
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
 <header class="contenedor">
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
            <div class="pt-5 col-12 cont-header d-flex justify-content-end ">
                <div class="imagen col-4">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <?php } ?>
                </div>
                <div class="textos col-8">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <h3><?php echo utf8_encode($rown['titulo']);?></h3>
                    <h1 class="main-text"><?php echo utf8_encode($rown['subtitulo']);?></h1>
                    <p>
                        <?php echo utf8_encode($rown['descripcion']);?>
                    </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <div class="body">
        <div class="container cont-hecho-medida">
            <div class="echoa-medida row">
                <div class="col-8 contenedor-hecho-medida">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <div class="textos-hecho-medida" >
                        <h1 class="main-text text-hecho-medida text-white"><?php echo utf8_encode($rown['titulo']);?></h1>
                        <h3 class="text-white secondary-txt-medida"><?php echo utf8_encode($rown['subtitulo']);?></h3>
                        <p class="p-txt-medida"><?php echo utf8_encode($rown['descripcion']);?></p>
                        <button class="btn-medida">Ver más</button>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-4 text-center">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="historia">
            <div class="row">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 3"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <div class="col-6 cont-img-historia">
                    <img class="img-historia"   src="assets/img/<?php echo $rown['logo'];?>" alt="">
                </div>
                <div class="col-6 cont-txt-historia">
                    <div class="cont-text">
                        <p class="txt-historia"><?php echo utf8_encode($rown['descripcion']);?></p>
                            <div>
                                <button class="btn-historia" >Historia de LCM</button>
                            </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="productos container ">
            <div class="row justify-content-between">
                <div class="col-2 cont-product">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 4"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img-product" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <h3 class="txt-product" ><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
                </div>
                <div class="col-2 cont-product">
                     <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 6"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img-product" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <h3 class="txt-product" ><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
                </div>
                <div class="col-2 cont-product">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 7"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img-product" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <h3 class="txt-product" ><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
                </div>
                <div class="col-2 cont-product">
                     <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 8"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img-product" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <h3 class="txt-product" ><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
                </div>
                <div class="col-2 cont-product">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 9"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img-product" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <h3 class="txt-product" ><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
                </div>        
            </div>
        </div>
        <div class="pruebas">
            <div class="pruebas-cont row">
                    <div class="col-2">
                        <img src="assets/img/quality-badge.png" alt="">
                    </div>
                    <div class="col-3 cont-img-pruebas">
                        <img src="assets/img/Rectángulo 6.png" alt="">
                    </div>
                    <div class="col-4 text-white">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 10"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <h2 class="tittle-certificado"><?php echo utf8_encode($rown['titulo']);?></h2>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 11"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 12"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 13"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 15"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 16"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                        <label class="d-block label-txt-pruebas" for=""><i class="fa fa-check" aria-hidden="true"></i><h3 class="d-inline text-white"><?php echo utf8_encode($rown['titulo']);?></h3></label>
                        <?php } ?>

                    </div>
                    <div class="col-2 certifiaco-por">
                        <div class="certificados">
                                <h5 class="text-white m-0" >Certificados por:</h5>
                                <br>
                                <img src="assets/img/Capa 14.png" alt="">    
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>