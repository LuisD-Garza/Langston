<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>
    <?php $page = 'porqueLangston';include('navbar.php') ?>
    <?php include('chat.php') ?>
    <div class="body">
         <div class="contenedor-porque pb-4">
            <div class="pt-5 col-12 cont-header d-flex justify-content-end pt-5 pb-5">
                <div class="textos col">
                    <h3 class="main-text text-center pt-4 text-white">¿Por qué Langston?</h3>
                </div>
            </div>
            <div class="row justify-content-around">
            <?php include('admin/dbcon.php');
            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 1"); 
            while($rown = mysqli_fetch_array($selectcii)){ ?>
            <div class="col-lg-3 col-md-5 col-9 pt-5 pb-5 cards" data-aos="flip-right" data-aos-duration="1000" >
                <div class="text-center">
                    <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                    <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                </div>
                <div class="col d-inline-block">
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 1");
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <?php if ($rown['id'] != $rown['categoria'] ) {?>
                        <li class="text-white" >
                            <?php echo utf8_encode($rown['titulo']);?> 
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 2"); 
            while($rown = mysqli_fetch_array($selectcii)){ ?>
            <div class="col-lg-3 col-md-5 col-9 pt-5 pb-5 cards" data-aos="flip-right" data-aos-duration="1000">
                <div class="text-center">
                    <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                    <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                </div>
                <div class="col d-inline-block">
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 2");
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <?php if ($rown['id'] != $rown['categoria'] ) {?>
                        <li class="text-white" >
                            <?php echo utf8_encode($rown['titulo']);?> 
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 3"); 
            while($rown = mysqli_fetch_array($selectcii)){ ?>
            <div class="col-lg-3 col-md-5 col-9 pt-5 pb-5 cards" data-aos="flip-right" data-aos-duration="1000" >
                <div class="text-center">
                    <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                    <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                </div>
                <div class="col d-inline-block">
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 3");
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <?php if ($rown['id'] != $rown['categoria'] ) {?>
                        <li class="text-white" >
                            <?php echo utf8_encode($rown['titulo']);?> 
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 4"); 
            while($rown = mysqli_fetch_array($selectcii)){ ?>
            <div class="col-lg-3 col-md-5 col-9 pt-5 pb-5 cards" data-aos="flip-right" data-aos-duration="1000">
                <div class="text-center">
                    <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                    <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                </div>
                <div class="col d-inline-block">
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 4");
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <?php if ($rown['id'] != $rown['categoria'] ) {?>
                        <li class="text-white" >
                            <?php echo utf8_encode($rown['titulo']);?> 
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <?php } ?>

            <?php include('admin/dbcon.php');
            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 5"); 
            while($rown = mysqli_fetch_array($selectcii)){ ?>
            <div class="col-lg-3 col-md-5 col-9 pt-5 pb-5 cards" data-aos="flip-right" data-aos-duration="1000">
                <div class="text-center">
                    <img class="" src="assets/img/<?php echo $rown['img'];?>" alt="">
                    <h2 class=" text-white mt-3 txt-head-mvv" ><?php echo utf8_encode($rown['titulo']);?></h2>
                </div>
                <div class="col d-inline-block">
                    <ul>
                        <?php include('admin/dbcon.php'); 
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 5");
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <?php if ($rown['id'] != $rown['categoria'] ) {?>
                        <li class="text-white" >
                            <?php echo utf8_encode($rown['titulo']);?> 
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <?php } ?>

            </div>
    	<!-- <div class="container cont-porque text-white normal">
    		<div class="row">
    			<div class="col-2 d-flex justify-content-center align-items-center bg-white">
    				<img src="assets/img/information.png" alt="">
    			</div>
    			<div class="col-10">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 1"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
    				<h3><?php echo utf8_encode($rown['titulo']);?></h3>
                    <?php } ?>
    				<div class="col d-inline-block">
                        <ul>
                            <?php include('admin/dbcon.php'); 
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 1"); 
                            while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <?php if ($rown['id'] != $rown['categoria'] ) {?>
                            <li>
                                <?php echo utf8_encode($rown['titulo']);?> 
                            </li>
                            <?php }} ?>
                        </ul>
    				</div>
    			</div>
    		</div>

            <div class="row">
                <div class="col-2 d-flex justify-content-center align-items-center bg-white">
                    <img src="assets/img/dollar-symbol.png" alt="">
                </div>
                <div class="col-10">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 2"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>   
                    <div class="col-5 d-inline-block">
                        <ul>
                            <?php include('admin/dbcon.php'); 
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.categoria = 2"); 
                            while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <?php if ($rown['id'] != $rown['categoria'] ) {?>
                            <li>
                                <?php echo utf8_encode($rown['titulo']);?> 
                            </li>
                            <?php }} ?>
                        </ul>
                    </div>
                    <div class="col-5 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 10"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                            <p><?php echo utf8_encode($rown['titulo']);?></p>
                        <?php } ?>    
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2 d-flex justify-content-center align-items-center bg-white">
                    <img src="assets/img/medal.png" alt="">
                </div>
                <div class="col-10">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 3"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                    <h3><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>    
                    <div class="col-5 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 12"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 13"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>     
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                    </div>
                    <div class="col-5 d-inline-block ">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                            <p><?php echo utf8_encode($rown['titulo']);?></p> 
                        <?php } ?>   
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2 d-flex justify-content-center align-items-center bg-white">
                    <img src="assets/img/clock.png" alt="">
                </div>
                <div class="col-10">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 4"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                    <h3><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>  
                    <div class="col-5 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 16"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 17"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>   
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                    </div>
                    <div class="col-5 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 18"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>  
                            <p><?php echo utf8_encode($rown['titulo']);?></p>    
                        <?php } ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2 d-flex justify-content-center align-items-center bg-white">
                    <img src="assets/img/trust.png" alt="">
                </div>
                <div class="col-10">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 5"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                    <h3><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>
                    <div class="col-5 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 20"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 21"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                    </div>
                    <div class="col-5 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 22"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?> 
                            <p><?php echo utf8_encode($rown['titulo']);?></p> 
                        <?php } ?>   
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>     
    	</div> -->



    </div>
</body>
    <?php include('footer.php') ?>
</html>