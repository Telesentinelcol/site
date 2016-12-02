<?php $ruta = isset($rut) ? $rut : ''; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
        <meta name="description" content="Telesentinel es una empresa de seguridad privada, de Monitoreo de Alarmas para hogares, empresas, negocios, Cámaras de Vigilancia y Rastreo Vehicular."/>
        <meta name="keywords" content="Alarmas para hogares, Alarmas para casas, Alarmas para negocios, Alarmas para empresas, Cámaras de seguridad, circuito cerrado, empresa de monitoreo seguridad para hogar, sistema de cámaras de vigilancia, Telesentinel, alarma, alarma casa, alarma con sensor, alarma electrónica, alarma para empresa, alarma para tienda, alarma para vivienda, alarma precio - alarma precios, alarmas Telesentinel, alarma, seguridad, alarma y cámaras de seguridad, alarmas, alarmas antirrobo, alarmas casa, seguridad electrónica"/>
        <meta name="author" content="Telesentinel">
        <title>Telesentinel | Monitoreo de alarmas televideo y rastreo vehícular</title>
        <link rel="shortcut icon" href="<?= $ruta ?>img/favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
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
        <script type="text/javascript">
            var __lc = {};
            __lc.license = 5585211;
            __lc.group = 1;

            (function () {
                var lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(lc, s);
            })();
        </script>    
        <script type="text/javascript">
            $(document).ready(function () {

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

                ga('create', 'UA-69057401-1', 'auto');
                ga('send', 'pageview');


                var origen = 'registroseo';
                var url = window.location.href.split('/');

                if (url[3] == 'telesentinel') {
                    section = url[4];
                } else {
                    section = url[3];
                }

                if (section == 'registroseo' || section == 'facebook' || section == 'display' || section == 'mailing' || section == 'busqueda' || section == 'waze' || section == 'instagram')
                {
                    origen = section;
                }

                (function (a) {
                    (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
                })(navigator.userAgent || navigator.vendor || window.opera);
                var dispositivo = 'desktop';
                if (jQuery.browser.mobile) {
                    dispositivo = 'movil';
                }

                $("#formContacto").load('<?= $ruta ?>formContacto.php', {'dispositivo': dispositivo, 'origen': origen});

                $('#bg-zero').waypoint(
                        function (direction) {
                            if (direction == "down") {
                                animacionlogo();
                                $('.collapse').collapse('hide');
                            }
                        }, {
                    offset: "50%"
                });

                $('#bg-one').waypoint(
                        function (direction) {
                            if (direction == "down") {
                                animacioncasa();
                                $('.collapse').collapse('hide');
                            }
                        }, {
                    offset: "50%"
                });

                $('#bg-two').waypoint(
                        function (direction) {
                            if (direction == "down") {
                                animaciontelevideo();
                                $('.collapse').collapse('hide');
                            }
                        }, {
                    offset: "50%"
                });

                $('#bg-three').waypoint(
                        function (direction) {
                            if (direction == "down") {
                                animacioncar();
                                $('.collapse').collapse('hide');
                            }
                        }, {
                    offset: "50%"
                });

            });
        </script>
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
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
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');

            fbq('init', '331665720529665');
            fbq('track', 'PageView');
        </script>
    <noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=331665720529665&ev=PageView &noscript=1"/> </noscript>
    <!-- End Facebook Pixel Code -->
</head>