$(document).ready(function(){

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
    $('.cont-img-historia ').addClass('col-12');
    $('.cont-txt-historia').addClass('col-12');
    $('.cont-product').addClass('col-3');
    $('.img-cert-1').removeClass('cont-img-cert');
    $('.cap-7').removeClass('cap-7');


}

if (screen.width <=426) {
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
