$(document).ready(function (){
    $('.dropdown-menu .icon-menu').click(function () {
        $(this).parent('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-chevron-down fa-chevron-right');
    });
});