
$(document).ready(function () {
    // Toggle menu display on click
    $('.menu-toggle').click(function () {
        $('.nav-links').toggleClass('show');
    });
});

//para cerrar el menu hamburguesa cuando haces click en cualquier otro sitio de la pagina
$(document).click(function (e) {
    if (!$(e.target).closest('.nav-links, .menu-toggle').length) {
        $('.nav-links').removeClass('show'); // Cierra el menú
    }
});
