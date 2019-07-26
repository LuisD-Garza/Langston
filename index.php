<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>

    <?php $page = 'inicio';include('navbar.php') ?>
    
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
                <div class="textos col-sm-8 col-12">
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
                <div class=" m-0 jumbotron jumbotron-fluid contenedor-hecho-medida m-3 jumbo-inicio col-sm-6 col-12 " style="background-color: #e9ecef00">
                <div class="">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <div class="textos-hecho-medida" >
                        <h1 class="main-text  text-white p-0"><?php echo utf8_encode($rown['titulo']);?></h1>
                        <h3 class="text-white secondary-txt-medida"><?php echo utf8_encode($rown['subtitulo']);?></h3>
                        <p class="p-txt-medida" id="textSec1"></p>
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
                        <p class="txt-historia pl-3" id="textHistoria" ><?php echo utf8_encode($rown['descripcion']);?></p>
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
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.especial = 4"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>

                <div class="col-2 cont-product img1" data-aos="flip-left" data-aos-duration="1000" style="background-image: url('assets/img/<?php echo utf8_encode($rown['logo']) ?>'); background-size: cover;">
                    <!-- <img src="http://lorempixel.com/500/500/" alt="Avatar" class="image"> -->
                     <div class="overlay" style="border-radius: 23px">
                        <div class="text h6"><?php echo utf8_encode($rown['titulo']) ?></div>
                    </div>
                </div>
                <?php } ?>  
            </div>
        </div>
    <!-- Certificado -->
        <div class=" pb-3"  data-aos="fade-left" data-aos-duration="1000" style="background: #eb5c01b0;">
                <div class=" cont-hecho-medida">
                    <div class="pruebas-cont row" style="background-color: #e9ecef00">
                                <div class="col pl-0 d-flex justify-content-center align-items-center">
                                    <img class="img-certificado" src="assets/img/quality-badge.png" alt="">
                                </div>
                                <div class="col list-certificado d-flex justify-content-center align-items-center">
                                    <div class="cajita">
                                    <?php include('admin/dbcon.php');
                                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 5"); 
                                    while($rown = mysqli_fetch_array($selectcii)){
                                    ?>
                                    <p class="tittle-certificado h2 m-0"><?php echo utf8_encode($rown['titulo']);?></p>
                                    <?php } ?>
                                    <ul>
                                    <?php include('admin/dbcon.php');
                                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.especial = 5"); 
                                    while($rown = mysqli_fetch_array($selectcii)){
                                    ?>
                                        <li class="text-white h2 m-0 lista-calidad" ><?php echo utf8_encode($rown['titulo']);?></li>
                                    <?php } ?>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class=" ">
                                        <h5 class="text-white m-0" >Certificados por:</h5>
                                        <br>
                                        <img  src="assets/img/Capa 14.png" alt="">    
                                    </div>
                                </div>
                    <div class="col certificado-img d-flex justify-content-center align-items-center">
                        <img   src="assets/img/saco.png" alt="">
                    </div>
                </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <?php include('chat.php') ?>
</body>
</html>