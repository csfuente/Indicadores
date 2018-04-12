jQuery(document).ready(function ($) {

    // Mantener año actualizado en el footer.
    var d = new Date();
    var n = d.getFullYear();
    document.getElementById("anio").innerHTML = n;

});

// scroll a categoría para ciudad.html
$(".scroll-indicadores .nav-item .nav-link").click(function () {
    $('html,body').animate({
        scrollTop: $(".contenedor-tab").offset().top
    },
        'slow');
});

// scroll a categoría para indicadores.html
$(".scroll-ind .nav-item .nav-link").click(function () {
    $('html,body').animate({
        scrollTop: $(".contenedor-tabla .tab-content").offset().top
    },
        'slow');
});

// función botón volver arriba
window.onscroll = function () { scrollFunction() };

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

// filtro ciudades
(function ($) {
    jQuery.expr[':'].Contains = function (a, i, m) {
        return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };

    function listFilter(filtroCiudad, lista) {
        var form = $("<form>").attr({ "class": "filterform", "action": "#" }),
            input = $("<input>").attr({ "class": "filterinput", "type": "text" });
        $(form).append(input).appendTo(filtroCiudad);

        $(input)
            .change(function () {
                var filtrar = $(this).val();
                if (filtrar) {
                    $(lista).find(".nombreCiudad:not(:Contains(" + filtrar + "))"). find(".listado").addClass("filtrado");
                    $(lista).find(".nombreCiudad:Contains(" + filtrar + ")").find(".listado").removeClass("filtrado");
                } else {
                    $(lista).find(".listado").removeClass("filtrado");
                }
                return false;
            })
            .keyup(function () {
                $(this).change();
            });
    }

    $(function () {
        listFilter($("#filtroCiudad"), $("#lista"));
    });
}(jQuery));