$(document).ready(function(){

// Collapse/Expand icon
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


}

if (screen.width <=426) {
    $('.cont-img-pruebas').addClass('d-none');
    $('.certifiaco-por').addClass('col-4');
    $('.cont-footer-r').addClass('col-12');
    $('.social-footer').addClass('col-12');

}
})
