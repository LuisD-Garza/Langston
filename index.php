<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>

    <?php $page = 'inicio';include('navbar.php') ?>
    <?php include('chat.php') ?>
 <header >

    </header>
    <div class="body">
        <div class="contenedor">
            <div class="container cont-cont row pt-5">
            <div class="pt-5 col-12 cont-header d-flex justify-content-end ">
                <div class="imagen col-4">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
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
            <!-- light-grey-terrazzo.png /// stripes-light.png -->
         <div class=""  data-aos="fade-left" data-aos-duration="1000" style="background: #eb5c01b0;">
            <div class="container cont-hecho-medida">
            <div class="echoa-medida row">
                <div class="jumbotron jumbotron-fluid contenedor-hecho-medida m-3 jumbo-inicio" style="background-color: #e9ecef00">
                <div class="container">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <div class="textos-hecho-medida" >
                        <h1 class="main-text  text-white p-0"><?php echo utf8_encode($rown['titulo']);?></h1>
                        <h3 class="text-white secondary-txt-medida"><?php echo utf8_encode($rown['subtitulo']);?></h3>
                        <p class="p-txt-medida"><?php echo utf8_encode($rown['descripcion']);?></p>
                        <p class="p-txt-medida d-none" id="hiddentxtSec1" ><?php echo utf8_encode($rown['descripcion']);?></p>
                        <button id="btn-sec1" class="btn btn-dark btn-medida">Ver más</button>
                    </div>
                    <?php } ?>
                </div>
                </div>

                <div class=" text-center d-flex align-items-center justify-content-center img-inicio">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <img class="img" src="assets/img/<?php echo $rown['logo'];?>" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    <!-- Historia -->
        <div class="historia" data-aos="fade-right" data-aos-duration="1000">
            <div class="row flex-column m-0 pb-5" >
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 3"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
                <div class="col-8 cont-txt-historia " >
                    <div class="cont-text divider">
                        <h2 class="h1 pl-3" >Historia</h2>
                        <!-- <img class="pl-3"   src="assets/img/<?php echo $rown['logo'];?>" alt="" > -->
                        <p class="txt-historia pl-3" ><?php echo utf8_encode($rown['descripcion']);?></p>
                        <p class="txt-historia pl-3 d-none" id="hiddentxt" ><?php echo utf8_encode($rown['descripcion']);?></p>
                            <div class="pl-3" >
                                <button id="btn-historia" class="btn-historia btn btn-dark" >Historia de LCM</button>
                            </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <!-- Productos -->
        <div class="productos container pb-5 pl-0 pr-0">
            <div class="row justify-content-between">

                <div class="col-2 cont-product img1" data-aos="flip-left" data-aos-duration="1000" style="background-image: url('http://lorempixel.com/500/500/');">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6">txt prueba 1</div>
                    </div>
                </div>

                <div class="col-2 cont-product img1" data-aos="flip-left" data-aos-duration="1000" style="background-image: url('https://picsum.photos/id/13/190/180');">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6">txt prueba 2</div>
                    </div>
                </div>

                <div class="col-2 cont-product img1" data-aos="flip-up" data-aos-duration="1000" style="background-image: url('https://picsum.photos/id/666/190/180');">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6">txt prueba 3</div>
                    </div>
                </div>

                <div class="col-2 cont-product img1" data-aos="flip-right" data-aos-duration="1000" style="background-image: url('https://picsum.photos/id/27/190/180');">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6">txt prueba 4</div>
                    </div>
                </div>

                <div class="col-2 cont-product img1" data-aos="flip-right" data-aos-duration="1000" style="background-image: url('https://picsum.photos/id/237/190/180');">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6">txt prueba 5</div>
                    </div>
                </div>
       
            </div>
        </div>
    <!-- Certificado -->
        <div class=" pb-3"  data-aos="fade-left" data-aos-duration="1000" style="background: #eb5c01b0;">
                <div class="container cont-hecho-medida">
                    <div class="pruebas-cont row">
                        <div class=" jumbo-certificado jumbotron jumbotron-fluid contenedor-hecho-medida m-3" style="background-color: #e9ecef00">
                            <div class="container">
                                <div class="row">
                                <div class="col-3 pl-0">
                                    <img class="img-certificado" src="assets/img/quality-badge.png" alt="">
                                </div>
                                <div class="col-6 list-certificado">
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
                                        <img  src="assets/img/Capa 14.png" alt="">    
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div class="col certificado-img">
                        <img   src="assets/img/Rectángulo 6.png" alt="">
                    </div>
                    </div>
                </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>