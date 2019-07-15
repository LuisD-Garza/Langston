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
                <a class="nav-link" href="nosotros.php">Nosotros </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="productos.php">Productos <span class="sr-only">(current)</span></a>
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
     <header class="contenedor-product">
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
                        <h1 class="main-text text-center">Productos</h1>
                    </div>
                </div>
            </div>
    </header>
    <div class="body">
            
        <div class="container">

            <div class="row pt-5" >
                <div class="col-3 text-white cont-" style=" height: 500px; overflow: auto;" >
                    <?php include('admin/dbcon.php');
                    $selectcii = mysqli_query($mysqli,"SELECT * FROM `productos`"); 
                    while($rown = mysqli_fetch_array($selectcii)){
                    ?>
                    <div class="col btn-product mb-4" style="cursor: pointer;">
                        <h3 class="mb-0"  onClick="window.location.href='productos.php?id=<?php echo utf8_encode($rown['id']); ?>'" ><?php echo utf8_encode($rown['nombre']) ?></h3>
                    </div>
                    <?php } ?>
            </div>
        <?php 
        $id = $_GET['id'];
        if ($id == 0) {
           
        }else
        {?>
            <div class="col  align-items-center justify-content-center">  
                <div class="row pt-3 pb-5">

                    <div class="col">
                        Diseño
                        <select class="custom-select" class="d-block">
                             <option selected>Seleccion una</option>
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `dis` WHERE id_producto = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                            <option value="<?php echo $rown['id'] ?>"><?php echo utf8_encode($rown['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        Acabado
                        <select class="custom-select" class="d-block">
                             <option selected>Seleccion una</option>
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `acabado` WHERE id_producto = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                            <option value="<?php echo $rown['id'] ?>"><?php echo utf8_encode($rown['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        Peso
                        <select class="custom-select" class="d-block">
                             <option selected>Seleccion una</option>
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `peso` WHERE id_producto = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                            <option value="<?php echo $rown['id'] ?>"><?php echo utf8_encode($rown['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        Tipo de tela
                        <select class="custom-select" class="d-block">
                             <option selected>Seleccion una</option>
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `tipotela` WHERE id_producto = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                            <option value="<?php echo $rown['id'] ?>"><?php echo utf8_encode($rown['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        Color
                        <select class="custom-select" class="d-block">
                             <option selected>Seleccion una</option>
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `color` WHERE id_producto = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                            <option value="<?php echo $rown['id'] ?>"><?php echo utf8_encode($rown['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </div>

            </div>
                    <div class="d-inline-block text-center">
                            <?php include('admin/dbcon.php');
                            $selectcii = mysqli_query($mysqli,"SELECT * FROM `productos` WHERE id = $id"); 
                            while($rown = mysqli_fetch_array($selectcii)){
                            ?>
                        <img src="assets/img/<?php echo utf8_encode($rown['img']) ?>" alt="" style='width: 100%;' >
                        <?php }  ?>
                    </div>
                </div>
                <?php }?>
        </div>
    </div>
</body>
       <?php include('footer.php') ?>
</html>