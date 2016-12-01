<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$equipos = isset($equipos) ? $equipos : '';
?>
<div class="content">
    <figure class="logotipo-monitoreo">
        <ul>
            <li><a href="javascript:scrollToCasa();">Monitoreo para hogar</a></li>
            <li><a href="javascript:scrollToEmpresa();">Monitoreo para empresa</a></li>
            <li><a href="javascript:scrollToBeneficios();">Beneficios de monitoreo</a></li>
        </ul>
    </figure>
    <section class="casa" id="casa">
        <h2>Diseñamos la seguridad de su hogar</h2>
        <div class="md-trigger mtimagen">
            <div class="monitoreo-casa">
                <figure class="casa-interna" id="monitoreo-casa"></figure>
            </div>
        </div>
        <div class="tooltip tooltip-west infrarrojo">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>sensor-doble-tecnologia/">
                    <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/sensor.png" alt=""/>
                    <span>Sensor de infrarrojo</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west magnetico">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>magneticos/">
                    <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/magnetico.png" alt=""/>
                    <span>Sensores magnéticos</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west tecladotol">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>teclado/">
                    <img src="<?= $ruta ?>img/equipos/bg-teclado.png" alt=""/>
                    <span>Teclado</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-east sensor-humo">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>sensor-doble-tecnologia/">
                    <img src="<?= $ruta ?>img/equipos/sensor-movimiento.png" alt=""/>
                    <span>Sensor de movimiento</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-east btn-panico">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>boton-panico/">
                    <img src="<?= $ruta ?>img/equipos/btn-panico.png" alt=""/>
                    <span>Botone de pánico</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west sirena-cosina">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>sirena/">
                    <img src="<?= $ruta ?>img/equipos/sirena.png" alt=""/>
                    <span>Sirena</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west radio">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>radio/">
                    <img src="<?= $ruta ?>img/equipos/radio-gprs.png" alt=""/>
                    <span>Radio comunicador</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west vibrosensor">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <img src="<?= $ruta ?>img/equipos/vibro-sensor.png" alt=""/>
                <span>Vibro sensor</span>
            </span>
        </div>
        <a href="javascript:scrollToEmpresa();"><div class="abajomonitoreo"></div></a>
    </section>
    <section class="empresa" id="empresa">
        <h2>Diseñamos la seguridad para su empresa</h2>
        <div class="md-trigger mtimagen">
            <div class=" monitoreo-empresa">
                <figure class="bg-local" id="monitoreo-empresa"></figure>
            </div>
        </div>
        <div class="tooltip tooltip-west btn-panico-negocios">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>boton-panico/">
                    <img src="<?= $ruta ?>img/equipos/btn-panico.png" alt=""/>
                    <span>Botones de pánico</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-west infrarrojo-negocios">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <a href="<?= $equipos ?>sensor-doble-tecnologia/">
                    <img src="<?= $ruta ?>img/equipos/sensor.png" alt=""/>
                    <span>Sensor de infrarojo</span>
                </a>
            </span>
        </div>
        <div class="tooltip tooltip-east vibrosensor-negocio">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <img src="<?= $ruta ?>img/equipos/vibro-sensor.png" alt=""/>
                <span>Vibro sensor</span>
            </span>
        </div>
        <a href="javascript:scrollToBeneficios();"><div class="abajomonitoreo"></div></a>
    </section>
    <section class="dos-monitoreo" id="beneficios">
        <h2 class="titulo-beneficios titulo-oculto">Beneficios de nuestro servicio de sistema de monitoreo de alarmas</h2>
        <div class="md-trigger mtimagen">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="img-moto">
                <h2 class="titulo-beneficios titulo-mostrar">Beneficios de nuestro servicio de sistema de monitoreo de alarmas</h2>
                <img src="<?= $ruta ?>img/moto.png" alt="moto" class="img-moto">
            </div>
        </div>
        <div class="md-trigger mtimagen">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="img-text-monitoreo">
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-monitoreo.png" alt="">
                        <p><span>Contamos con un protocolo para cada tipo de señal de emergencia:</span>
                            Intrusión, pánico, emergencias médicas, apertura por acceso forzado</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-mantenimiento.png" alt="">
                        <p><span>Plan Mantenimiento</span>
                            Incluido en la factura mensual de monitoreo obtendrá asistencia y soporte técnico especializado</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-gprs.png" alt="">
                        <p><span>Comunicación con frecuencia GPRS.</span>
                            Transmisión con plataforma de datos a nivel nacional</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-notelefono.png" alt="">
                        <p><span>No dependemos de la línea telefónica</span>
                            conectamos el panel de alarma a nuestra central de monitoreo</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-24horas.png" alt="">
                        <p><span>Asistencia con:</span>
                            Técnicos online 24 horas</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-email.png" alt="">
                        <p><span>Envío de mensajes vía SMS y/o correo electrónico.</span>
                            Apertura y cierre de su sistema de monitoreo</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-pse.png" alt="">
                        <p><span>Pagos PSE.</span>
                            Realice el pago de sus facturas desde la comodidad de su hogar o empresa con PSE</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-reaccion.png" alt="">
                        <p><span>Reacción motorizada</span>
                            Supervisores estratégicamente distribuidos en diferentes puntos de la ciudad, con sistema de ubicación satelital (GPS).</p>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <img src="<?= $ruta ?>img/icon-policia.png" alt="">
                        <p><span>Reacción Policial</span>
                            Afiliado a la red de apoyo de la Policía Nacional de Colombia.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    var z = $(document).find(".empresa");
    var z1 = $(document).find(".dos-monitoreo");
    var z2 = $(document).find(".empresa");
    z.waypoint(
            function (direction) {
                if (direction == "down") {
                    animacionmonitoreo();
                }
            }, {
        offset: "50%"
    });
    z1.waypoint(
            function (direction) {
                if (direction == "down") {
                    animacioncasamonitoreo();
                }
            }, {
        offset: "50%"
    });
    z2.waypoint(
            function (direction) {
                if (direction == "down") {
                    animacionempresamonitoreo();
                }
            }, {
        offset: "50%"
    });
</script>

