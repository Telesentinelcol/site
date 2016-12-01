<?php $ruta = isset($rut) ? $rut : ''; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="4;url=https://www.telesentinel.com/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
        <meta name="description" content="Telesentinel es una empresa de seguridad privada, de Monitoreo de Alarmas para hogares, empresas, negocios, Cámaras de Vigilancia y Rastreo Vehicular."/>
        <meta name="keywords" content="Alarmas para hogares, Alarmas para casas, Alarmas para negocios, Alarmas para empresas, Cámaras de seguridad, circuito cerrado, empresa de monitoreo seguridad para hogar, sistema de cámaras de vigilancia, Telesentinel, alarma, alarma casa, alarma con sensor, alarma electrónica, alarma para empresa, alarma para tienda, alarma para vivienda, alarma precio - alarma precios, alarmas Telesentinel, alarma, seguridad, alarma y cámaras de seguridad, alarmas, alarmas antirrobo, alarmas casa, seguridad electrónica"/>
        <meta name="author" content="Telesentinel">
        <title>Telesentinel | Monitoreo de alarmas televideo y rastreo vehícular</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link href="<?= $ruta ?>css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $ruta ?>css/media.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $ruta ?>css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $ruta ?>css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= $ruta ?>css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $ruta ?>css/bootstrap/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?= $ruta ?>css/sweetalert.css">
        <link rel="stylesheet" href="<?= $ruta ?>css/galery/galery.css">
        <script type="text/javascript" src="<?= $ruta ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/sweetalert.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/waypoints.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/ceb069c225.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/TweenMax.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/scroll/ScrollToPlugin.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/scroll/scroll.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/TextPlugin.min.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/galery/galery.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/head.js"></script>
        <script type="text/javascript" src="<?= $ruta ?>js/anim.js"></script>
          <!--custom head HTML-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        </script>

        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        </script>

        <script type="text/javascript">
            var qs = (function (a) {
                if (a == "")
                    return {};
                var b = {};
                for (var i = 0; i < a.length; ++i)
                {
                    var p = a[i].split('=', 2);
                    if (p.length == 1)
                        b[p[0]] = "";
                    else
                        b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
                }
                return b;
            })(window.location.search.substr(1).split('&'));
            /////////////////////////////////////////////////////////////////////////////////////////////////////////

            //Codigo para recibir los parametros para todos los formularios

            var origen = qs["origen"];
            
            if (typeof origen === 'undefined' || origen === null || origen === "") {
                origen = "registroseo";
            }

            if (origen === "facebook") {
                fbq('init', '432588260284569');
                fbq('track', "PageView");
            }
            else {
                ga('create', 'UA-69057401-1', 'auto');
                ga('send', 'pageview');
            }

            ///////////////////////////////////////////////////////////////////////////////////////////////////////

        </script>
    </head>