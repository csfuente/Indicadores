jQuery(document).ready(function ($) {

    // Mantener año actualizado en el footer.
    var d = new Date();
    var n = d.getFullYear();
    document.getElementById("anio").innerHTML = n;

    setTimeout(function () {
        // counter inicio
        $('.counter').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },
                {
                    duration: 2000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }

                });
        });


        $(".multiselect-container").prepend("<div class='cerrar'><a>Listo</a></div>");
    }, 200);

    // cambiar color imagen li menú
    $("header .nav-item").hover(function () {
        $(this).find("img").toggleClass("toblack");
    });
    
    const mq = window.matchMedia("(max-width: 1200px)");

    if (mq.matches) {
        // scroll a categoría para ciudad.html
        $(".scroll-indicadores .nav-item .nav-link").click(function () {
            $('html,body').animate({
                scrollTop: $(".contenedor-tab").offset().top - 70
            },
                'slow');
        });

        // scroll a categoría para indicadores.html
        $(".scroll-ind .nav-item .nav-link").click(function () {
            $('html,body').animate({
                scrollTop: $(".contenedor-tabla .tab-content").offset().top - 70
            },
                'slow');
        });
    }

    // botón volver arriba aparece al alejarse 100px de top
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("irTop").style.display = "block";
        } else {
            document.getElementById("irTop").style.display = "none";
        }
    }

    // volver arriba lentamente
    $('#irTop').each(function () {
        $(this).click(function () {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });

    // reducir tramaño header al hacer scroll down
    $(window).scroll(function () {
        if ($(document).scrollTop() > 0) {
            $('.header').addClass('peque');
        } else {
            $('.header').removeClass('peque');
        }
    });


    // filtro ciudades
    (function ($) {
        jQuery.expr[':'].Contains = function (a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };

        function filtroCiudades(filtroCiudad, lista) {
            var form = $("<form>").attr({ "class": "form-filtro", "action": "#" }),
                input = $("<input>").attr({ "class": "input-filtro", "type": "text", "placeholder": "Buscar ciudad" });
            $(form).append(input).appendTo(filtroCiudad);

            $(input)
                .change(function () {
                    var filtrar = $(this).val();
                    if (filtrar) {
                        $(lista).find(".nombreCiudad:not(:Contains(" + filtrar + "))").parents(".listado").addClass("filtrado");
                        $(lista).find(".nombreCiudad:Contains(" + filtrar + ")").parents(".listado").removeClass("filtrado");
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
            filtroCiudades($("#filtroCiudad"), $("#lista"));
        });
    }(jQuery));

    // session storage para indicadores - options
    $('.indicators').change(function () {
        var selected = [];
        $('.indicators option').each(function () {
            if (this.selected) {
                selected.push(this.value);
            }
        });
        sessionStorage.setItem('indicators', JSON.stringify(selected));
    });

    var stored_indicators = JSON.parse(sessionStorage.getItem('indicators'));
    if (stored_indicators !== null) {
        $('.indicators option').each(function () {
            for (var i = 0; i < stored_indicators.length; i++) {
                if (this.value == stored_indicators[i]) {
                    this.selected = true;
                }
            }
        });
    }

});

// session storage para ciudad1
$(function () {
    $('#lacity1').change(function () {
        sessionStorage.setItem('city1', this.value);
    });
    if (sessionStorage.getItem('city1')) {
        $('#lacity1').val(sessionStorage.getItem('city1'));
    }
});

// session storage para ciudad2
$(function () {
    $('#lacity2').change(function () {
        sessionStorage.setItem('city2', this.value);
    });
    if (sessionStorage.getItem('city2')) {
        $('#lacity2').val(sessionStorage.getItem('city2'));
    }
});

// Validar que no sea elegida la misma ciudad en el comparador
function validarForm() {
    var x = document.forms["comparar"]["ciudad1"].value;
    var y = document.forms["comparar"]["ciudad2"].value;
    if (x == y) {
        $("#errorCiudad").modal("show");
        return false;
    }
}







