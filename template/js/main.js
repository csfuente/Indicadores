	jQuery(document).ready(function($) {

		// Mantener año actualizado en el footer.
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById("anio").innerHTML = n;

});

$(".indicadores-ciudad .nav-item .nav-link").click(function() {
    $('html,body').animate({
        scrollTop: $(".contenedor-tab").offset().top},
        'slow');
});