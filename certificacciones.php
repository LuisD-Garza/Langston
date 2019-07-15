<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>
    <?php $page = 'certificaciones';include('navbar.php') ?>
    <?php include('chat.php') ?>
    <div class="body">
        <div class="contenedor-certificaciones">
        <div class="container cont-cont row pt-5">
            <div class="pt-5 col-12 cont-header d-flex justify-content-end ">
                <div class="textos col">
                    <h3 class="main-text text-center pt-4 text-white">Certificaciones<br> y Membresías</h3>
                </div>
            </div>
         </div>
           
        <div class="row certificaccion-3 pb-5" data-aos="fade-right" data-aos-duration="1000">
            <div class="certificaccion-" style="background: #eb5c01b0">
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
                         <img class="cap-8" src="assets/img/<?php echo $rown['img'];?>" alt="" data-aos="flip-up" data-aos-duration="2000">
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){
                        ?>
                         <img class="cap-7" src="assets/img/<?php echo $rown['img'];?>" alt="" data-aos="flip-up" data-aos-duration="2000">
                        <?php } ?>
                    </div>
                    
            </div>
        </div>

        <div class="row certificaccion-2 pt-5 pb-5" data-aos="fade-left" data-aos-duration="1000" >
            <div class="col-3 normal mt-3" style="background: #eb5c01b0" >
                <img class="img-cert-2" src="assets/img/Capa 11.png" data-aos="flip-up" data-aos-duration="2000">
            </div>
            <div class="col-9 certificaccion- mt-3" style="background: #eb5c01b0" >
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
                        <p class="col-6 text-justify" ><?php echo utf8_encode($rown['descripcion2']);?></p>
                        <p class="col-6 text-justify"><?php echo utf8_encode($rown['descripcion3']);?></p>
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

        <div class="row certificaccion-2 pb-5" data-aos="fade-right" data-aos-duration="1000" >
            <div class="col-9 certificaccion- cert-2"  style="background: #eb5c01b0">
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
                <img src="assets/img/<?php echo $rown['img'];?>" data-aos="flip-up" data-aos-duration="2000">
                <?php } ?>    
            </div>
        </div>

        <div class="row certificaccion-3 pb-5" data-aos="fade-left" data-aos-duration="1000">
            <div class="certificaccion- text-center" style="background: #eb5c01b0">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `certificaccion` WHERE certificaccion.id = 18"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?> 
                <h2 class="tittle-cert-2 tittle-cert" ><?php echo utf8_encode($rown['titulo']);?></h2>
                <img class="pl-5 pt-4 pb-4 img-dela" src="assets/img/<?php echo $rown['img'];?>" data-aos="flip-up" data-aos-duration="2000" alt="">
                <p class="txt-cert-1 text-justify"><?php echo utf8_encode($rown['descripcion']);?></p>
                <?php } ?>  
            </div>
        </div>
    </div>



    </div>
</body>
    <?php include('footer.php') ?>
</html>