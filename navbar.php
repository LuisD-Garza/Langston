<!-- canvas-orange.jgp // prism.png  -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark menu" style="z-index:99999999999999999999;background-image: url('assets/img/prism.png'); ">
    <a href="" class="navbar-brand">
        <img src="assets/img/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Langston
    </a>
    <!-- Hamburgesa -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponse" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navResponse">
        <div class="navbar-nav text-white d-flex justify-content-around" style="width: 100%">
            <a href="index.php" class="nav-item nav-link <?php if($page=='inicio'){echo 'active';}?> ">Inicio</a>
            <a href="nosotros.php" class="nav-item nav-link <?php if($page=='nosotros'){echo 'active';}?>">Nosotros</a>
            <a href="" class="nav-item nav-link <?php if($page=='productos'){echo 'active';}?>">Productos</a>
            <a href="certificacciones.php" class="nav-item nav-link <?php if($page=='certificaciones'){echo 'active';}?>">Certificaciones</a>
            <a href="sectores.php" class="nav-item nav-link <?php if($page=='sectores'){echo 'active';}?>">Sectores</a>
            <a href="porqueLangston.php" class="nav-item nav-link <?php if($page=='porque'){echo 'active';}?>">¿Por qué Langston?</a>
            <a href="" class="nav-item nav-link <?php if($page=='contacto'){echo 'active';}?>">Contacto</a>
        </div>
    </div>
</nav>