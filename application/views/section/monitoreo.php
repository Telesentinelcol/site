<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$equipos = isset($equipos) ? $equipos : '';
?>
<div id="fullpage" itemscope itemtype ="http://schema.org/Product">
    <div class="content">
        <figure class="logotipo-monitoreo">
            <ul>
                <li><a href="javascript:scrollToCasa();">Monitoreo para hogar</a></li>
                <li><a href="javascript:scrollToEmpresa();">Monitoreo para empresa</a></li>
                <li><a href="javascript:scrollToBeneficios();">Beneficios de monitoreo</a></li>
            </ul>
        </figure>
        
        <div class="section " id="section0">
            <div class="prueba">
                <div class="info-vistas">
                    <h1><strong>Tele</strong><br><span>monitoreo</span></h1>
                    <h6>Sistema de monitoreo de alarmas para hogares</h6>
                    <p><em>En teselesentinel diseñamos la seguridad de su hogar</em></p>
                    <button class="btn-comprar">Cotizalo ahora</button>
                    <div class="redes-sociales">
                        <a href="#" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                        <a href="#" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                        <a href="#" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                    </div>
                </div>
                <div class="imgs-vistas">
                    <img  class="img-casa" src="<?= $ruta ?>img/nuevas/alarmas-casa.png" alt="" title=""/>
                </div>
                <!-- botones de alarma para la casa-->
                <div class="preloader" onClick="mostrar('ploader')"></div>
                <div class="preloader-a" onClick="mostrar('ploader-a')"></div>
                <div class="preloader-b" onClick="mostrar('ploader-b')"></div>
                <div class="preloader-c" onClick="mostrar('ploader-c')"></div>
                <div class="preloader-d" onClick="mostrar('ploader-d')"></div>
                <div class="preloader-e" onClick="mostrar('ploader-e')"></div>
                <div class="preloader-f" onClick="mostrar('ploader-f')"></div>
                <div class="preloader-g" onClick="mostrar('ploader-g')"></div>
            </div>
            <a href="javascript:scrollToEmpresa();"><div class="abajomonitoreo"></div></a>
        </div>

        <div class="section " id="section1">
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
        </div>
        
        <div class="section " id="section2">
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
    </div>
    <div id="element" style="display: none;" class="footer">
        <section class="sub-content">

            <div id="close">
                <a class="opc opc-big btn" href="#" onClick="ocultar()">
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
                        <div class="col-md-6">
                            <img class="imgs-equipos" src="bg-magneticos.png" alt="Magneticos" title="Magneticos"/>
                        </div>
                        <div class="col-md-6">
                            <!--<h1 class="titulo-equipos">Botón de pánico inalamabrico</h1>-->
                            <h1 class="titulo-equipos">Sensores magnéticos</h1>
                            <!--<p class="descripcion-equipos">Al presionar el botón se activa el sistema de alarmas; se recibe la señal de emergencia en la central de monitoreo de Telesentinel, se verifica que la señal sea real y se procede con una reacción motorizada por nuestros supervisores.</p>-->
                            <p class="descripcion-equipos">Magnéticos de uso liviano para puertas y ventanas que enviarán señales de alarma al momento de apertura o cierre de puertas y ventanas.</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Adquieralo ya</span></button>
                                <div class="morph-content">
                                    <div>
                                        <div class="content-style-social">
                                            <a>
                                                <form>
                                                    <input type="hidden" name="origen" >
                                                    <input type="hidden" name="pais" value="CO" >
                                                    <input type="hidden" name="dispositivo" value="<?= $dispositivo ?>" >
                                                    <input type="text" required=""  placeholder="Nombre y apellido" name="nombre">
                                                    <input type="email" required="" placeholder="info@email.com" pattern="^[a-zA-Z0-9.!#$%&amp;'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email">
                                                    <input type="tel" value="" pattern="[0-9]{5,12}" placeholder="Teléfono" name="telefono">
                                                    <input type="hidden" id="confirmacion" name="confirmacion" value="0"/>
                                                    <select name="ciudad">
                                                        <option value="">Seleccione Ciudad</option>
                                                        <option value="8001">Barranquilla</option>
                                                        <option value="11001">Bogotá</option>
                                                        <option value="68001">Bucaramanga</option>
                                                        <option value="76001">Cali</option>
                                                        <option value="25175">Chía</option>
                                                        <option value="25307">Girardot</option>
                                                        <option value="5001">Medellín</option>
                                                        <option value="15001">Tunja</option>
                                                        <option value="20001">Valledupar</option>
                                                        <option value="50001">Villavicencio</option>
                                                        <option value="11001">Otros</option>
                                                    </select>
                                                    <select name="servicio">
                                                        <option value="Monitoreo">Seleccione Servicio</option>
                                                        <option value="Monitoreo">Monitoreo</option>
                                                        <option value="Televideo">Televideo</option>
                                                        <option value="Rastreo">Rastreo</option>
                                                        <option value="Monitoreo">Otro</option>
                                                    </select>
                                                    <div class="g-recaptcha" data-sitekey="6LfmDyITAAAAAFCJDxlS1eHBCE5MvDYQlK_elq15"></div>
                                                    <div class="terminos">Acepto los <a href="files/terminos.pdf" target="_blank">términos</a> y condiciones<input type="checkbox" id="confcheck" onclick="validarCheck()"/></div>
                                                    <input type="submit" value="Enviar" id="enviar" name="enviar">
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="ploader-a">
                        <div class="item" id="ploader">
                            <div class="col-md-6">
                                <img class="imgs-equipos" src="bg-boton-panico.png" alt="bontón de pánico" title="bontón de pánico"/>
                            </div>
                            <div class="col-md-6">
                                <h1 class="titulo-equipos">Botón de pánico inalamabrico</h1>
                                <p class="descripcion-equipos">Al presionar el botón se activa el sistema de alarmas; se recibe la señal de emergencia en la central de monitoreo de Telesentinel, se verifica que la señal sea real y se procede con una reacción motorizada por nuestros supervisores.</p>
                                <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                    <button type="button"><span>Adquieralo ya</span></button>
                                    <div class="morph-content">
                                        <div>
                                            <div class="content-style-social">
                                                <a>
                                                    hola
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="ploader-b">
                        <div class="col-md-6">
                            <img class="imgs-equipos" src="bg-radio.png" alt="Radio" title="Radio"/>
                        </div>
                        <div class="col-md-6">
                            <h1 class="titulo-equipos">Radio comunicador GPRS</h1>
                            <p class="descripcion-equipos">Transmisión de señales de alarma a través de la plataforma de datos de telefonía móvil</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Adquieralo ya</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="ploader-c">
                        <div class="col-md-6">
                            <img class="imgs-equipos" src="bg-sirena.png" alt="Sirena" title="Sirena"/>
                        </div>
                        <div class="col-md-6">
                            <h1 class="titulo-equipos">Sirena</h1>
                            <p class="descripcion-equipos">Emite señales sonoras como elemento disuasivo</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Adquieralo ya</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="ploader-e">
                        <div class="col-md-6">
                            <img class="imgs-equipos" src="bg-teclado.png" alt="teclado" title="teclado"/>
                        </div>
                        <div class="col-md-6">
                            <h1 class="titulo-equipos">Teclado</h1>
                            <p class="descripcion-equipos">Permite a usuarios autorizados activar y desactivar el sistema de alarmas, cuenta con botones de: Emergencia, Intrusión y Fuego. Guarda las claves, tiempos entrada, salida y duración de la sirena.</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Adquieralo ya</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="item" id="ploader-f">
                        <div class="col-md-6">
                            <img class="imgs-equipos" src="bg-sensor.png" alt="teclado" title="teclado"/>
                        </div>
                        <div class="col-md-6">
                            <h1 class="titulo-equipos">Sensor de doble tecnología</h1>
                            <p class="descripcion-equipos">Infrarrojo dual de uso interior, integra tecnología infrarroja y microondas; Para hogares, casas, empresas y negocios.</p>
                            <div class="morph-button morph-button-inflow morph-button-inflow-2">
                                <button type="button"><span>Adquieralo ya</span></button>
                            </div>
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

