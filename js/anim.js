/////////////////FUNCIONES ADICIONALES/////////////////
function animacioncasamonitoreo() {
    TweenLite.set('#monitoreo-casa', {x: -1000, opacity: 0});
    TweenLite.to('#monitoreo-casa', 2, {
        x: 0,
        opacity: 1,
        ease: SlowMo.easeOut
    }, 1);
}

function animacionempresamonitoreo() {
    TweenLite.set('#monitoreo-empresa', {x: 1000, opacity: 0});
    TweenLite.to('#monitoreo-empresa', 2, {
        x: 0,
        opacity: 1,
        ease: SlowMo.easeOut
    }, 1);
}

function animacionmonitoreo() {
    var izquierda = $(document).find(".izquierda");
    var derecha = $(document).find(".derecha");

    TweenLite.set(izquierda, {x: -1000, opacity: 0});
    TweenLite.set(derecha, {x: 1000, opacity: 0});

    var tw1 = TweenLite.to(izquierda, 2, {
        x: 0,
        opacity: 1,
        ease: SlowMo.easeOut
    }, 1);

    var tw2 = TweenLite.to(derecha, 2, {
        x: 0,
        opacity: 1,
        ease: SlowMo.easeOut
    }, 1);
}

/////////////////FUNCIONES PRINCIPALES/////////////////

function animacioncar() {
    TweenLite.set('#img-rastreo', {x: 1500, y: -200, scale: 0.05});
    var tw3 = TweenLite.to('#img-rastreo', 2, {
        x: 0,
        y: 0,
        scale: 1.1,
        ease: Quart.easeOut
    });
}

function animaciontelevideo() {
    TweenLite.set('.img-televideo', {x: 500, y: 0});
    var tw3 = TweenLite.to('.img-televideo', 3, {
        x: 0,
        y: 0,
        scale: 1.1,
        ease: Quart.easeOut
    });
}

function animacioncasa() {
    var tl = new TimelineMax();
    tl.set('.img-monitoreo', {x: 0, y: 500, opacity: 0})
            .to(".img-monitoreo", 3, {x: 0, y: 0, opacity: 1, ease: Quart.easeOut});
}

function animacionlogo() {
    TweenLite.to('.img-logo', 2, {
        left: '+=100',
        height: '5%',
        width: '5%'
    });
}

function scrollToScreen(op)
{
    if (op == 1) {
        $("#retorno").attr('style', 'display:none');
        $.get('section/inicio.html', function (data) {
            $('.content').html(data);
            scrollToTop();
        });
    }
    if (op == 2) {
        $.get('section/inicio.html', function (data) {
            $('.content').html(data);
            scrollToMonitoreo();
        });
    }
    if (op == 3) {
        $.get('section/inicio.html', function (data) {
            $('.content').html(data);
            scrollToTelevideo();
        });
    }
    if (op == 4) {
        $.get('section/inicio.html', function (data) {
            $('.content').html(data);
            scrollToRastreo();
        });
    }
    if (op == 5) {
        $.get('section/inicio.html', function (data) {
            $('.content').html(data);
            scrollToContacto();
        });
    }

    if (op == 6) {
        $("#retorno").removeAttr('style');
        cortina('Monitoreo de Alarmas', 'section/monitoreo.html', '#000', 'Promo Bogota Home');
    }

    if (op == 7) {
        $("#retorno").removeAttr('style');
        cortina('Televideo', 'section/televideo.html', 'red', 'PROMO TELEVIDEO HOME');
    }

    if (op == 8) {
        $("#retorno").removeAttr('style');
        cortina('Rastreo Vehicular', 'section/rastreo.html', 'green', 'PROMO RASTREO HOME');
    }

    if (op == 9) {
        $("#retorno").removeAttr('style');
    }

    if (op == 10) {
        $("#retorno").removeAttr('style');
    }

    if (op == 11) {
        $("#retorno").removeAttr('style');
        $.get('section/oferta1.html', function (data) {
            $('.content').html(data);
            scrollToferta1();
        });
    }

    if (op == 12) {
        $("#retorno").removeAttr('style');
        $.get('section/ciudades.html', function (data) {
            $('.content').html(data);
            scrollToCali();
        });
    }

    if (op == 13) {
        $("#retorno").removeAttr('style');
        $.get('section/oferta2.html', function (data) {
            $('.content').html(data);
            scrollToferta2();
        });
    }
    if (op == 14) {
        $("#retorno").removeAttr('style');
        $.get('section/oferta3.html', function (data) {
            $('.content').html(data);
            scrollToferta3();
        });
    }
    if (op == 15) {
        $("#retorno").removeAttr('style');
        $.get('section/medellin.html', function (data) {
            $('.content').html(data);
            scrollToMedellin1();
        });
    }
    if (op == 16) {
        $("#retorno").removeAttr('style');
        $.get('section/bucaramanga.html', function (data) {
            $('.content').html(data);
            scrollToBucaramanga1();
        });
    }
    if (op == 17) {
        $("#retorno").removeAttr('style');
        $.get('section/villavicencio.html', function (data) {
            $('.content').html(data);
            scrollToVillavicencio1();
        });
    }
    if (op == 18) {
        $("#retorno").removeAttr('style');
        $.get('section/barranquilla.html', function (data) {
            $('.content').html(data);
            scrollToBarranquilla1();
        });
    }
    if (op == 19) {
        $("#retorno").removeAttr('style');
        $.get('section/girardot.html', function (data) {
            $('.content').html(data);
            scrollToGirardot1();
        });
    }
    if (op == 20) {
        $("#retorno").removeAttr('style');
        $.get('section/valledupar.html', function (data) {
            $('.content').html(data);
            scrollToValledupar1();
        });
    }
    if (op == 21) {
        $("#retorno").removeAttr('style');
        $.get('section/alianza.html', function (data) {
            $('.content').html(data);
            scrollToAlianza();
        });
    }
    if (op == 22) {
        $("#retorno").removeAttr('style');
        $.get('section/sitemap.html', function (data) {
            $('.content').html(data);
            scrollToSitemap();
        });
    }
    if (op == 23) {
        $("#retorno").removeAttr('style');
        $.get('section/tunja.html', function (data) {
            $('.content').html(data);
            scrollToTunja();
        });
    }
    if (op == 24) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/monitoreo.html', '#000', 'Promo Bogota Home', 'empresa');
    }
    if (op == 25) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/monitoreo.html', '#000', 'Promo Bogota Home', 'beneficios');
    }
    if (op == 26) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/televideo.html', '#000', 'Promo Bogota Home', 'bg-fabrica');
    }
    if (op == 27) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/televideo.html', '#000', 'Promo Bogota Home', 'televide3');
    }
    if (op == 28) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/televideo.html', '#000', 'Promo Bogota Home', 'televide4');
    }
    if (op == 29) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/televideo.html', '#000', 'Promo Bogota Home', 'televide5');
    }
    if (op == 30) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/rastreo.html', '#000', 'Promo Bogota Home', 'rastreo2');
    }
    if (op == 31) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/rastreo.html', '#000', 'Promo Bogota Home', 'rastreo3');
    }
    if (op == 32) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/rastreo.html', '#000', 'Promo Bogota Home', 'rastreo4');
    }
    if (op == 33) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/barranquilla.html', '#000', 'Promo Bogota Home', 'Barranquilla2');
    }
    if (op == 34) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/barranquilla.html', '#000', 'Promo Bogota Home', 'Barranquilla3');
    }
    if (op == 35) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/bucaramanga.html', '#000', 'Promo Bogota Home', 'Bucaramanga2');
    }
    if (op == 36) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/bucaramanga.html', '#000', 'Promo Bogota Home', 'Bucaramanga3');
    }
    if (op == 37) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/ciudades.html', '#000', 'Promo Bogota Home', 'Cali2');
    }
    if (op == 38) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/ciudades.html', '#000', 'Promo Bogota Home', 'Cali3');
    }
    if (op == 39) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/girardot.html', '#000', 'Promo Bogota Home', 'Girardot2');
    }
    if (op == 40) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/girardot.html', '#000', 'Promo Bogota Home', 'Girardot3');
    }
    if (op == 41) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/medellin.html', '#000', 'Promo Bogota Home', 'Medellin2');
    }
    if (op == 42) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/medellin.html', '#000', 'Promo Bogota Home', 'Medellin3');
    }
    if (op == 43) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/tunja.html', '#000', 'Promo Bogota Home', 'Tunja2');
    }
    if (op == 44) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/tunja.html', '#000', 'Promo Bogota Home', 'Tunja3');
    }
    if (op == 45) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/valledupar.html', '#000', 'Promo Bogota Home', 'Valledupar2');
    }
    if (op == 46) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/valledupar.html', '#000', 'Promo Bogota Home', 'Valledupar3');
    }
    if (op == 47) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/Villavicencio2.html', '#000', 'Promo Bogota Home', 'Villavicencio2');
    }
    if (op == 48) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/Villavicencio2.html', '#000', 'Promo Bogota Home', 'Villavicencio3');
    }
    if (op == 49) {
        $("#retorno").removeAttr('style');
        cortinaAux('section/gracias.html', '#000', 'Promo Bogota Home', 'gracias');
    }
    $("#navbar-menu-home").collapse('hide');
}

function cortina(texto, pagina, color, servicio) {
    var tl = new TimelineLite();
    tl.add(TweenLite.delayedCall(0, cargarPagina, [pagina, servicio]));
    tl.play();
}

function cargarPagina(pagina, servicio) {
    $.get(pagina, {services: servicio}, function (data) {
        $('.content').html(data);
        scrollToTop();
    });
}
function cortinaAux(pagina, color, servicio, scroll) {
    var tl = new TimelineLite();
    tl.add(TweenLite.delayedCall(0, cargarPaginaAux, [pagina, servicio, scroll]));
    tl.play();
}

function cargarPaginaAux(pagina, servicio, scroll) {
    $.get(pagina, {services: servicio}, function (data) {
        $('.content').html(data);
        $('html, body').animate({scrollTop: $("#" + scroll).offset().top}, 'slow');
        responsiveMobile(scroll);
        scrollNavbar();
    });
}
function enviarform()
{
    $.ajax({
        'type': 'POST',
        'url': 'https://www.telesentinel.com/web/index.php/conversion/site',
        'data': $("#fo3method").serialize(),
        'beforeSend': function () {

        },
        'success': function (respuesta) {
            if (respuesta == 'ok') {
                window.location.href = 'https://www.telesentinel.com/gracias';
            }
            if (respuesta == 'terminos') {
                swal("¡Alto!", "Debe Aceptar Terminos y Condiciones", "error");
            }
            if (respuesta == 'error') {
                swal("¡Error!", "No se enviaron los Datos comuniquese\n al Tel. 2888788 opcion 2", "error");
            }
        },
        'error': function (m, e, a) {
            swal("¡Error!", "En este Momento esta en Mantenimiento\n la plataforma comuniquese\n al Tel. 2888788 opcion 2 " + e, "error");
        },
        'cache': false
    });
    return false;
}
function validarCheck()
{
    if ($('#confcheck').prop('checked')) {
        $('#confirmacion').val(1);
    } else {
        $('#confirmacion').val(0);
    }
}

function navigatoricon()
{
    if ($("#navigatoricon").hasClass("active")) {
        $("#navigatoricon").removeClass('active');
        $("#navigatoricon").html('<span class="fa fa-list" style="color:#fff;"></span>');
        $('.collapse').collapse('hide');
    } else {
        $("#navigatoricon").addClass('active');
        $("#navigatoricon").html('<span class="fa fa-times" style="color:#fff;"></span>');
        $('.collapse').collapse('show');
    }
}