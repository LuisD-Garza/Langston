<!DOCTYPE html>
<html>
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
    <a class="navbar-brand" href="index.php">
        <img src="assets/img/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="menu-collapsed">Langston</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
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
            <li class="nav-item active">   
                <a href="porqueLangston.php" class="nav-link">¿Por qué Langston?<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">   
                <a href="contact.php" class="nav-link">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
    <header class="contenedor-porque">
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
                        <h1 class="main-text text-center">Por que langston</h1>
                    </div>
                </div>
            </div>
    </header>
    <div class="body">
         
    	<div class="container cont-porque text-white normal">
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
    				<div class="col-5 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 11"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
    					<label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 15"); 
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
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 15"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <p><?php echo utf8_encode($rown['titulo']);?></p>
                        <?php } ?>    
                        </div>
    					
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
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 6"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 7"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>  
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 8"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>  
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 9"); 
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

        <div class="container cont-porque text-white respons">
            <div class="row">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 1"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3 class="col-12"><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?> 
                    <div class="col-6 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 11"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?> 
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 15"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?> 
                    </div>
                    <div class="col-6 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block txt-pq">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 19"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <p><?php echo utf8_encode($rown['titulo']);?></p>   
                        <?php } ?>  
                        </div>
                    </div>
            </div>
            <div class="row">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 2"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3 class="col-12" ><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>  
                    <div class="col-6 d-inline-block">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 6"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>  
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 7"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>  
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 8"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>  
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 9"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                        <label class="d-block" for=""><i class="fas fa-check"></i><?php echo utf8_encode($rown['titulo']);?></label>
                        <?php } ?>  
                    </div>
                    <div class="col-6 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block txt-pq">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 10"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <p><?php echo utf8_encode($rown['titulo']);?></p>
                        <?php } ?>      
                        </div>
                        
                    </div>
            </div>

            <div class="row">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 3"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3 class="col-12"><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>   
                    <div class="col-6 d-inline-block">
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
                    <div class="col-6 d-inline-block ">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block txt-pq">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 14"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <p><?php echo utf8_encode($rown['titulo']);?></p> 
                        <?php } ?>      
                        </div>
                        
                    </div>
            </div>

            <div class="row">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 4"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3 class="col-12"><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?>      
                    <div class="col-6 d-inline-block">
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
                    <div class="col-6 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block txt-pq">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 18"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                            <p><?php echo utf8_encode($rown['titulo']);?> </p> 
                        <?php } ?> 
                        </div>
                        
                    </div>
            </div>

            <div class="row">
                        <?php include('admin/dbcon.php');
                        $selectcii = mysqli_query($mysqli,"SELECT * FROM `porquelangston` WHERE porquelangston.id = 5"); 
                        while($rown = mysqli_fetch_array($selectcii)){ ?>
                    <h3 class="col-12"><?php echo utf8_encode($rown['titulo']);?></h3>
                        <?php } ?> 
                    <div class="col-6 d-inline-block">
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
                    <div class="col-6 d-inline-block">
                        <div class="col-2 d-inline-block play ">
                            <label for=""><i class="fas fa-play"></i></label>
                        </div>
                        <div class="col-9 d-inline-block txt-pq">
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
</body>
    <?php include('footer.php') ?>
</html>