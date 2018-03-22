	jQuery(document).ready(function($) {

		// Mantener año actualizado en el footer.
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById("anio").innerHTML = n;

});
