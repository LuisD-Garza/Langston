$(document).ready(function(){
  AOS.init();

    $('#btn-historia').on('click', function(){
        $('#hiddentxt').toggleClass('d-none',1000);
    });
    $('#btn-sec1').on('click', function(){
        $('#hiddentxtSec1').toggleClass('d-none',1000);
    });

$('.logo').on('click', function(){
      location.href= "http://mercadotecniamix.mx/Langston-3/index.php";
})
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}

if (screen.width <= 769) {
    AOS.refresh();
    $('.cont-nosotros').addClass('col-7');
    $('.txt-calidad-2').css({"width": "50%", "padding-left":"10px","padding-right":"10px"})
    $('.raya-1').addClass('d-none');
    $('.centrar').addClass('justify-content-center');
    $('.raya-2').addClass('d-none');
    $('.cont-img-historia ').addClass('col-12');
    $('.cont-txt-historia').addClass('col-12');
    $('.cont-product').addClass('col-3');
    $('.img-cert-1').removeClass('cont-img-cert');
    $('.cap-7').removeClass('cap-7');
    $('.jumbo-inicio').addClass('col-12');
    $('.img-inicio').removeClass('d-flex');
    $('.img-inicio').addClass('d-none');
    $('.jumbo-certificado').addClass('col-12');
    $('.list-certificado').removeClass('col-6');
    $('.list-certificado').addClass('col-4');
    $('.certificado-img').addClass('d-none')
}

if (screen.width <=426) {
    AOS.refresh();
    $('.lista-calidad').addClass('h4');  
    $('.img-inicio').addClass('d-none');
    $('.cont-text-nosotros').css({"width":"100%",})
    $('.raya').css({"width":"100%","margin-left":"0px"})
    $('.cont-img-nosotros').addClass('d-none');
    $('.txt-calidad-2').css({"width": "100%"})
    $('.img-certificado').addClass('img100')
    $('.cont-product').addClass('col-5');
    $('.circulo').addClass('d-none');
    $('.txt-pq').removeClass('col-9');
     $('.play').removeClass('d-inline-block');
    $('.play').addClass('d-none');
    $('.cont-img-pruebas').addClass('d-none');
    $('.certifiaco-por').addClass('col-4');
    $('.cont-footer-r').addClass('col-12');
    $('.social-footer').addClass('col-12');
    $('.certificaccion-').removeClass('col-9');
    $('.certificaccion-').addClass('col-12');
    $('.img-dela').removeClass('pl-5');
    $('.cont-').addClass('col-5');
}
})
