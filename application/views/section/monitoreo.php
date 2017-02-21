<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$equipos = isset($equipos) ? $equipos : '';
?>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 3000
    })
</script>
<div id="fullpage" itemscope itemtype ="http://schema.org/Product">

    <div class="section " id="section0">
        <div class="prueba">
            <div class="info-vistas" style="width: 350px; top:130px;">
                <h1><strong>Tele</strong><br><span style="font-size: 0.7em;">monitoreo hogar</span></h1>
                <h6>Sistema de monitoreo de alarmas para hogares</h6>
                <p><em>En teselesentinel diseñamos la seguridad de su hogar</em></p>
                <button class="btn-comprar">Contacto comercial</button>
                <div class="redes-sociales">
                    <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                    <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                    <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                </div>
            </div>
            <div class="imgs-vistas">
                <img  class="img-casa" src="<?= $ruta ?>img/nuevas/alarmas-casa.png" alt="" title=""/>
            </div>
            <div class="preloader" onClick="mostrar('ploader','element','prueba','footer')"></div>
            <div class="preloader-a" onClick="mostrar('ploader-a','element','prueba','footer')"></div>
            <div class="preloader-b" onClick="mostrar('ploader-b','element','prueba','footer')"></div>
            <div class="preloader-c" onClick="mostrar('ploader-c','element','prueba','footer')"></div>
            <div class="preloader-d" onClick="mostrar('ploader-d','element','prueba','footer')"></div>
            <div class="preloader-e" onClick="mostrar('ploader-e','element','prueba','footer')"></div>
            <div class="preloader-f" onClick="mostrar('ploader-f','element','prueba','footer')"></div>
            <div class="preloader-g" onClick="mostrar('ploader-g','element','prueba','footer')"></div>
        </div>
        
        <div id="element" style="display: none;" class="footer">
            <section class="sub-content">
                <div id="close">
                    <a class="opc opc-big btn" href="#" onClick="ocultar('element','prueba','footer')">
                        <span class="glyphicon glyphicon-remove"></span>CERRAR
                    </a>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item" id="ploader">
                            <div class="col-md-12">
                                <img class="imgs-equipos" src="<?= $ruta ?>img/bg-magneticos.png" alt="Magneticos" title="Magneticos"/>
                            </div>
                            <div class="col-md-12">
                                <h1 class="titulo-equipos">Sensores magnéticos</h1>
                                <p class="descripcion-equipos">Magnéticos de uso liviano para puertas y ventanas que enviarán señales de alarma al momento de apertura o cierre de puertas y ventanas.</p>
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>
                        <div class="item" id="ploader-a">
                            <div class="item" id="ploader">
                                <img class="imgs-equipos" src="<?= $ruta ?>img/bg-boton-panico.png" alt="bontón de pánico" title="bontón de pánico"/>

                                <h1 class="titulo-equipos">Botón de pánico inalamabrico</h1>
                                <p class="descripcion-equipos">Al presionar el botón se activa el sistema de alarmas; se recibe la señal de emergencia en la central de monitoreo de Telesentinel, se verifica que la señal sea real y se procede con una reacción motorizada por nuestros supervisores.</p>
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>
                        <div class="item" id="ploader-b">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-radio.png" alt="Radio" title="Radio"/>
                            <h1 class="titulo-equipos">Radio comunicador GPRS</h1>
                            <p class="descripcion-equipos">Transmisión de señales de alarma a través de la plataforma de datos de telefonía móvil</p>
                            <button type="button"><span>Contacto comercial</span></button>
                        </div>
                        <div class="item" id="ploader-c">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-sirena.png" alt="Sirena" title="Sirena"/>
                            <h1 class="titulo-equipos">Sirena</h1>
                            <p class="descripcion-equipos">Emite señales sonoras como elemento disuasivo</p>
                            <button type="button"><span>Contacto comercial</span></button>
                        </div>
                        <div class="item" id="ploader-e">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-teclado.png" alt="teclado" title="teclado"/>
                            <h1 class="titulo-equipos">Teclado</h1>
                            <p class="descripcion-equipos">Permite a usuarios autorizados activar y desactivar el sistema de alarmas, cuenta con botones de: Emergencia, Intrusión y Fuego. Guarda las claves, tiempos entrada, salida y duración de la sirena.</p>
                            <button type="button"><span>Contacto comercial</span></button>
                        </div>
                        <div class="item" id="ploader-f">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-sensor.png" alt="teclado" title="teclado"/>
                            <h1 class="titulo-equipos">Sensor de doble tecnología</h1>
                            <p class="descripcion-equipos">Infrarrojo dual de uso interior, integra tecnología infrarroja y microondas; Para hogares, casas, empresas y negocios.</p>
                            <button type="button"><span>Contacto comercial</span></button>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </div>
    </div>



    <div class="section " id="section1">

        <div class="prueba-1">
            <div class="info-vistas" style="width: 350px; top:130px;">
                <h1><strong>Tele</strong><br><span style="font-size: 0.6em;">monitoreo empresas</span></h1>
                <h6>Sistema de monitoreo de alarmas para empresas</h6>
                <p><em>En teselesentinel diseñamos la seguridad para su empresa</em></p>
                <button class="btn-comprar">Contacto comercial</button>
                <div class="redes-sociales">
                    <a href="#" class="facebook"><img src="<?= $ruta ?>img/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                    <a href="#" class="Instagram"><img src="<?= $ruta ?>img/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                    <a href="#" class="youtube"><img src="<?= $ruta ?>img/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                </div>
            </div>
            <div class="imgs-vistas">
                <img  class="img-casa" src="<?= $ruta ?>img/sistemas-de-alarmas-para-empresas.png" alt="" title=""/>
            </div>
    
            <div class="preloader-h" onClick="mostrar('ploader-h','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-i" onClick="mostrar('ploader-i','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-j" onClick="mostrar('ploader-j','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-k" onClick="mostrar('ploader-k','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-l" onClick="mostrar('ploader-l','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-m" onClick="mostrar('ploader-m','element-1','prueba-1','footer-1')"></div>
            <div class="preloader-n" onClick="mostrar('ploader-n','element-1','prueba-1','footer-1')"></div>
        </div>
        <div id="element-1" style="display: none;" class="footer-1">
            <section class="sub-content">

                <div id="close">
                    <a class="opc opc-big btn" href="#" onClick="ocultar('element-1','prueba-1','footer-1')">
                        <span class="glyphicon glyphicon-remove"></span>CERRAR
                    </a>
                </div>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item" id="ploader-h">
                            <div class="col-md-12">
                                <img class="imgs-equipos" src="<?= $ruta ?>img/bg-magneticos.png" alt="Magneticos" title="Magneticos"/>
                            </div>
                            <div class="col-md-12">
                                <h1 class="titulo-equipos">Sensores magnéticos</h1>
                                <p class="descripcion-equipos">Magnéticos de uso liviano para puertas y ventanas que enviarán señales de alarma al momento de apertura o cierre de puertas y ventanas.</p>
                                <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                    <button type="button"><span>Contacto comercial</span></button>
                                </div>
                            </div>
                        </div>

                        <div class="item" id="ploader-a">
                            <div class="item" id="ploader-i">
                                <img class="imgs-equipos" src="<?= $ruta ?>img/bg-boton-panico.png" alt="bontón de pánico" title="bontón de pánico"/>

                                <h1 class="titulo-equipos">Botón de pánico inalamabrico</h1>
                                <p class="descripcion-equipos">Al presionar el botón se activa el sistema de alarmas; se recibe la señal de emergencia en la central de monitoreo de Telesentinel, se verifica que la señal sea real y se procede con una reacción motorizada por nuestros supervisores.</p>
                                <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                    <button type="button"><span>Contacto comercial</span></button>
                                </div>
                            </div>
                        </div>

                        <div class="item" id="ploader-j">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-radio.png" alt="Radio" title="Radio"/>
                            <h1 class="titulo-equipos">Radio comunicador GPRS</h1>
                            <p class="descripcion-equipos">Transmisión de señales de alarma a través de la plataforma de datos de telefonía móvil</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>

                        <div class="item" id="ploader-k">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-sirena.png" alt="Sirena" title="Sirena"/>
                            <h1 class="titulo-equipos">Sirena</h1>
                            <p class="descripcion-equipos">Emite señales sonoras como elemento disuasivo</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>

                        <div class="item" id="ploader-l">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-teclado.png" alt="teclado" title="teclado"/>
                            <h1 class="titulo-equipos">Teclado</h1>
                            <p class="descripcion-equipos">Permite a usuarios autorizados activar y desactivar el sistema de alarmas, cuenta con botones de: Emergencia, Intrusión y Fuego. Guarda las claves, tiempos entrada, salida y duración de la sirena.</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>

                        <div class="item" id="ploader-m">
                            <img class="imgs-equipos" src="<?= $ruta ?>img/bg-sensor.png" alt="teclado" title="teclado"/>
                            <h1 class="titulo-equipos">Sensor de doble tecnología</h1>
                            <p class="descripcion-equipos">Infrarrojo dual de uso interior, integra tecnología infrarroja y microondas; Para hogares, casas, empresas y negocios.</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Contacto comercial</span></button>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </section>
        </div>
    </div>

    <div class="section " id="section2">
        <section class="dos-monitoreo" id="beneficios">
            <h2 class="titulo-beneficios titulo-mostrar">Beneficios de nuestro servicio de sistema de monitoreo de alarmas</h2>
            <div class="md-trigger mtimagen">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="img-moto">
                    <img src="<?= $ruta ?>img/moto.png" alt="moto" class="img-moto">
                </div>
            </div>
            <div class="md-trigger mtimagen">
                <div class="row">
                    <div class="beneficios">
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
            </div>
        </section>
    </div>
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


 