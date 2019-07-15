<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>
    <?php $page = 'nosotros';include('navbar.php') ?>
    <?php include('chat.php') ?>

<header class="contenedor-nosotros">

</header>
<div class="body">
    <div class="contenedor-nosotros">
        <div class="container cont-cont row pt-5">
            <div class="pt-5 col-12 cont-header d-flex justify-content-end ">
                <div class="imagen col-4">

                </div>
                <div class="textos col-8">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `textos` WHERE textos.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <h3 class="main-text">Nosotros</h3>
                    <?php } ?>
                </div>
            </div>
         </div>
        <div class="row m-0 align-items-center centrar">
            <div class="raya-1 col" style="background: #eb5c01b0; width: 41%; height: 10px"></div>
            <div class="" data-aos="flip-up" data-aos-duration="2000" style="background: #eb5c01b0;padding: 10px;border-radius: 10px;">
                <h3 class="text-white" >Politica Integrada</h3>
            </div>
            <div class="raya-2 col" style="background: #eb5c01b0; width: 41%; height: 10px"></div>
        </div>

        <div class="politica-integrada" data-aos="fade-right" data-aos-duration="1000" >
            <div class="row m-0 calidad ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 3"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="" style="width: 70%; display: flex; justify-content: flex-end;">
                    <h2 class="txt-calidad-3 text-white">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="rayaImg d-flex align-items-center" style="width: 100%;">
                    <div class="raya" style="background: #EB5C01; width: 80%; height: 15px"></div>
                        <div class="cont-img-nosotros" style="display: flex; align-items: center; justify-content: center;">
                            <img data-aos="flip-up" data-aos-duration="2000" src="assets/img/<?php echo $rown['img'];?>" alt="" style='position: absolute;' >
                        </div>
                </div>
                </div>
            <div class="cont-text-nosotros" style="display: flex; width: 75%; text-align: end; align-items: center; justify-content: flex-end;">
                <p class="txt-calidad-2 text-white"><?php echo utf8_encode($rown['descripcion']);?></p>
            </div>
                <?php } ?>
        </div>

        <div class="politica-integrada" data-aos="fade-left" data-aos-duration="1500" >
            <div class="row m-0 calidad ">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 4"); 
                while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="" style="width: 100%; display: flex; justify-content: flex-start; margin-left: 30%;">
                    <h2 class="txt-calidad-3 text-white">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="rayaImg d-flex align-items-center" style="width: 100%;">
                    <div class="cont-img-nosotros" style="display: flex; align-items: center; justify-content: center;">
                        <img data-aos="flip-up" data-aos-duration="2000" src="assets/img/<?php echo $rown['img'];?>" alt="" style='position: absolute;margin-left: 17%;' >
                    </div>
                    <div class="raya" style="background: #EB5C01;width: 100%;height: 15px;margin-left: 20%;"></div>
                </div>
            </div>
            <div class="cont-text-nosotros nos-txt-1">
                <p class="txt-calidad-2 text-white"><?php echo utf8_encode($rown['descripcion']);?></p>
            </div>
                <?php } ?>
        </div>

        <div class="politica-integrada" data-aos="fade-right" data-aos-duration="1000" >
            <div class="row m-0 calidad ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 5"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="" style="width: 70%; display: flex; justify-content: flex-end;">
                    <h2 class="txt-calidad-3 text-white">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="rayaImg d-flex align-items-center" style="width: 100%;">
                    <div class="raya" style="background: #EB5C01; width: 80%; height: 15px"></div>
                        <div class="cont-img-nosotros" style="display: flex; align-items: center; justify-content: center;">
                            <img data-aos="flip-up" data-aos-duration="2000" src="assets/img/<?php echo $rown['img'];?>" alt="" style='position: absolute;' >
                        </div>
                </div>
                </div>
                <div class="nos-txt-2" >
                    <p class="txt-calidad-2 text-white"><?php echo utf8_encode($rown['descripcion']);?></p>
                </div>
                <?php } ?>
            </div>

        <div class="politica-integrada" data-aos="fade-left" data-aos-duration="1000">
            <div class="row m-0 calidad ">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 6"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="" style="width: 100%; display: flex; justify-content: flex-start; margin-left: 30%;">
                    <h2 class="txt-calidad-3 text-white">
                       <?php echo utf8_encode($rown['titulo']);?>
                    </h2>
                </div>
                <div class="rayaImg d-flex align-items-center" style="width: 100%;">
                    <div class="cont-img-nosotros" style="display: flex; align-items: center; justify-content: center;">
                        <img data-aos="flip-up" data-aos-duration="2000" src="assets/img/<?php echo $rown['img'];?>" alt="" style='position: absolute;margin-left: 17%;' >
                    </div>
                    <div class="raya" style="background: #EB5C01;width: 100%;height: 15px;margin-left: 20%;"></div>
                </div>
                </div>
                <div class="nos-txt-1" >
                    <p class="txt-calidad-2 text-white"><?php echo utf8_encode($rown['descripcion']);?></p>
                </div>
                <?php } ?>
            </div>
            <div class="row justify-content-around">
                <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 7"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="col-12 col-md-4 pt-5 pb-5 cont-nosotros" data-aos="flip-left" data-aos-duration="1000" style="margin:20px; background: #eb5c01b0;">
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                        <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    </div>
                    <p class="text-white">
                        <?php echo utf8_encode($rown['descripcion']);?> 
                    </p>
                </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 8"); 
                while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="col-12 col-md-4 pt-5 pb-5 cont-nosotros" data-aos="flip-right" data-aos-duration="1000" style="margin:20px; background: #eb5c01b0;">
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                        <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    </div>
                    <p class="text-white">
                        <?php echo utf8_encode($rown['descripcion']);?> 
                    </p>
                </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.id = 9"); 
                while($rown = mysqli_fetch_array($selectcii)){ ?>
                <div class="col-12 col-md-4 pt-5 pb-5 cont-nosotros" data-aos="flip-up" data-aos-duration="1000" style="margin:20px; background: #eb5c01b0;">
                    <div class="text-center">
                        <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                        <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                    </div>
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `nosotros` WHERE nosotros.categoria = 9"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>               
                        <li class="text-white" style="font-size: 1.25rem" >
                            <?php echo utf8_encode($rown['titulo']);?>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            <?php } ?>

            </div>
         </div>
    </div>
</div>
    <?php include('footer.php') ?>
</body>

</html>