	jQuery(document).ready(function($) {

		// Mantener año actualizado en el footer.
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById("anio").innerHTML = n;

});

// scroll a categoría para ciudad.html
$(".scroll-indicadores .nav-item .nav-link").click(function() {
    $('html,body').animate({
        scrollTop: $(".contenedor-tab").offset().top},
        'slow');
});

// scroll a categoría para indicadores.html
$(".scroll-ind .nav-item .nav-link").click(function() {
    $('html,body').animate({
        scrollTop: $(".contenedor-tabla .tab-content").offset().top},
        'slow');
});

// función botón volver arriba
window.onscroll = function() {scrollFunction()};

// aparece al alejarse 20px de top
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("irTop").style.display = "block";
    } else {
        document.getElementById("irTop").style.display = "none";
    }
}

// volver arriba
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}