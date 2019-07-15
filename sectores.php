<!DOCTYPE html>
<html lang="en">
    <?php include('head.php') ?>
<body>
    <?php $page = 'sectores';include('navbar.php') ?>
    <?php include('chat.php') ?>
    <div class="body" >
        <div class="contenedor-sectores pb-5">
                <div class="container cont-cont row pt-5">
            <div class="pt-5 col-12 cont-header d-flex justify-content-end ">
                <div class="textos col">
                    <h3 class="main-text text-center pt-4 text-white">Sectores</h3>
                </div>
            </div>
         </div>    
    	<div class="container cont-sectores pb-4">
    		<div class="row cont-1-img justify-content-around ">
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 1"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    			<div class="col-md-4 col-7 cont-alimentos img1" style="height:564px ; background-image: url('assets/img/<?php echo $rown['img'];?>'); background-size: cover; border-radius: 23px">

                    <div class="overlay" style="border-radius: 23px; ">
                        <div class="card" style="height: 100%; background: #10101000; border-radius: 23px" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rown['titulo'];?></h5>
                                <p class="card-text">Descripccion</p>
                            </div>
                        </div>
                    </div>

    			</div>
                        <?php } ?>
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 2"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
    			<div class="col-md-4 col-7  img1" style=" height:564px; background-image: url('assets/img/<?php echo $rown['img'];?>'); background-size: cover; border-radius: 23px">
    				
                    <div class="overlay" style="border-radius: 23px; ">
                        <div class="card" style="height: 100%; background: #10101000; border-radius: 23px" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rown['titulo'];?></h5>
                                <p class="card-text">Descripccion</p>
                            </div>
                        </div>
                    </div>
    			</div>
                <?php } ?>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 3"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
    			<div class="col-md-4 col-7 cont-agircultura img1" style=" height:564px; background-image: url('assets/img/<?php echo $rown['img'];?>'); background-size: cover; border-radius: 23px">

                    <div class="overlay" style="border-radius: 23px; ">
                        <div class="card" style="height: 100%; background: #10101000; border-radius: 23px" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rown['titulo'];?></h5>
                                <p class="card-text">Descripccion</p>
                            </div>
                        </div>
                    </div>
                   
    			</div>
                 <?php } ?>
    		</div>
    		<div class="row cont-2-img justify-content-around">
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 4"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
    			<div class="col-md-4 col-7 img1" style="height:564px; background-image: url('assets/img/<?php echo $rown['img'];?>'); background-size: cover; border-radius: 23px">

                    <div class="overlay" style="border-radius: 23px; ">
                        <div class="card" style="height: 100%; background: #10101000; border-radius: 23px" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rown['titulo'];?></h5>
                                <p class="card-text">Descripccion</p>
                            </div>
                        </div>
                    </div>

    			</div>
                <?php } ?>
                <?php include('admin/dbcon.php');
                $selectcii = mysqli_query($mysqli,"SELECT * FROM `sectores` WHERE sectores.id = 5"); 
                while($rown = mysqli_fetch_array($selectcii)){
                ?>
    			<div class="col-md-4 col-7 mt-3 img1" style="height:564px ; background-image: url('assets/img/<?php echo $rown['img'];?>'); background-size: cover; border-radius: 23px">

                    <div class="overlay" style="border-radius: 23px; ">
                        <div class="card" style="height: 100%; background: #10101000; border-radius: 23px" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rown['titulo'];?></h5>
                                <p class="card-text">Descripccion</p>
                            </div>
                        </div>
                    </div>

    			</div>
                <?php } ?>
    		</div>
    	</div>
    </div>
    </div>
</body>
    <?php include('footer.php') ?>
</html>