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
    <a class="navbar-brand" href="index.php">
        <img src="assets/img/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="menu-collapsed">Langston</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros </a>
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
            <li class="nav-item active">   
                <a href="contact.php" class="nav-link">Contacto <span class="sr-only">(current)</span></a>
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
                        <h1 class="main-text text-center">Contacto</h1>
        <div class="row text-footer">
            <div class="col-4 text-white cont-text-footer cont-footer-r">
                <h5 class="txt-footer-r">Monterrey (Planta)</h5>
                <p class="txt-footer-r">Ave. Huinalá #930 A</p>
                <p class="txt-footer-r">  Parque Industrial Apodaca
                  Apodaca, N.L., México, 66633 T.</p>
                   <p class="txt-footer-r">(81) 8864 0000 Ext. 101 y 113 </p>
                   <p class="txt-footer-r" >ventas@langstonbag.com.mx</p>
            </div>
            <div class="col-4 text-white  cont-text-footer cont-footer-r">
                <h5 class="txt-footer-r">
                    Tampico
                </h5>   
                <p class="txt-footer-r">
                    Tel. (883) 116 6762 
                </p>
                <p class="txt-footer-r">
                Tel. (81) 8864 0000 Ext. 122
                </p>
                <p class="txt-footer-r"> 
                jlvillanueva@langstonbag.com.mx
                </p>
            </div>
            <div class="col-4 text-white cont-footer-r">
                <h5 class="txt-footer-r">
                    Ciudad de México
                </h5>
                <p class="txt-footer-r">
                 Tel. (55) 5539 0570 
                </p>
                <p class="txt-footer-r">
                 Tel. (81) 8864 0000 Ext. 122
                </p>
                <p class="txt-footer-r">
                 armandoarcos@langstonbag.com.mx 
                </p>
            </div>
        </div>
                    </div>
                </div>
            </div>
    </header>
    
            <div class="cont-map">
                    <iframe class="map-footer-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.721867711954!2d-100.22091038566066!3d25.746709815506172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eafb4e9b6da3%3A0xfb0ab8d1a83fb8b4!2sLangston+Companies+De+Mexico%2C+S.+De+RL+de+C.V.!5e0!3m2!1sen!2smx!4v1556680117692!5m2!1sen!2smx"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
</body>
</html>