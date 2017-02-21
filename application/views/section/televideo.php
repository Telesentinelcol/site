<?php $ruta = isset($rut) ? $rut : ''; ?>

<figure class="logotipo-televideo">
    <ul>
        <li><a href="javascript:scrollToApartamento();">Televideo hogar</a></li>
        <li><a href="javascript:scrollToFabrica();">Televideo empresa</a></li>
        <li><a href="javascript:scrollToTelevideo3();">Observe su empresa</a></li>
        <li><a href="javascript:scrollToTelevideo4();">Observe su hogar</a></li>
        <li><a href="javascript:scrollToTelevideo5();">Reacción motorizada</a></li>
    </ul>
</figure>

<section class="section" id="section0">
    <div class="prueba">
        <div class="info-vistas text-televideo" style="width: 330px;">
            
            <h1><strong>Televideo</strong><br><span style="font-size: 0.7em;">para hogar</span></h1>
            <h6>Sistema de televideo para hogares</h6>
            <p><em>En teselesentinel diseñamos la seguridad de su hogar</em></p>
            <button class="btn-comprar">Contacto comercial</button>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
            </div>
        </div>
        <div class="imgs-vistas">
            <img src="<?= $ruta ?>img/nuevas/televideo-apartamento.png" alt="" title=""/>
            <div class="preloader-1" onClick="mostrar('ploader-1')"></div>
            <div class="preloader-2" onClick="mostrar('ploader-2')"></div>
            <div class="preloader-3" onClick="mostrar('ploader-3')"></div>
        </div>
    </div>
    
    <div id="element-1" style="display: none;" class="footer-1">
        <section class="sub-content">

            <div id="close">
                <a class="opc opc-big btn" href="#" onClick="ocultar('element-1', 'prueba-1', 'footer-1')">
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
                    <div class="item" id="ploader-1">
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


                    <div class="item" id="ploader-2">
                        <img class="imgs-equipos" src="<?= $ruta ?>img/bg-boton-panico.png" alt="bontón de pánico" title="bontón de pánico"/>

                        <h1 class="titulo-equipos">Botón de pánico inalamabrico</h1>
                        <p class="descripcion-equipos">Al presionar el botón se activa el sistema de alarmas; se recibe la señal de emergencia en la central de monitoreo de Telesentinel, se verifica que la señal sea real y se procede con una reacción motorizada por nuestros supervisores.</p>
                        <div class="morph-button morph-button-inflow morph-button-inflow-2">
                            <button type="button"><span>Contacto comercial</span></button>
                        </div>
                    </div>


                    <div class="item" id="ploader-3">
                        <img class="imgs-equipos" src="<?= $ruta ?>img/bg-radio.png" alt="Radio" title="Radio"/>
                        <h1 class="titulo-equipos">Radio comunicador GPRS</h1>
                        <p class="descripcion-equipos">Transmisión de señales de alarma a través de la plataforma de datos de telefonía móvil</p>
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
</section>

<section class="section" id="section1">
    <div class="prueba">
        <div class="info-vistas text-televideo" style="width: 330px;">
            <h1><strong>Televideo</strong><br><span style="font-size: 0.7em;">para empresas</span></h1>
            <h6>Sistema de televideo para empresas</h6>
            <p><em>En teselesentinel Diseñamos la seguridad de su fábrica o negocio</em></p>
            <button class="btn-comprar">Contacto comercial</button>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
            </div>
        </div>
        <div class="imgs-vistas">
            <img src="<?= $ruta ?>img/nuevas/televideo-fabrica.png" alt="" title=""/>
            <div class="preloader-4" onClick="mostrar('ploader-4')"></div>
            <div class="preloader-5" onClick="mostrar('ploader-5')"></div>
            <div class="preloader-6" onClick="mostrar('ploader-6')"></div>
            <div class="preloader-7" onClick="mostrar('ploader-7')"></div>
        </div>
    </div>
</section>

<section class="section" id="section2">
    <div class="info-vistas text-televideo" style="width: 330px;">
        <h1><strong>Televideo</strong><br><span style="font-size: 0.7em;">para empresas</span></h1>
        <h6>Sistema de televideo para empresas</h6>
        <p><em>Visualizamos desde la central de monitoreo, las imágenes cuando se recibe la señal de intrusión o pánico.</em></p>
        <button class="btn-comprar">Contacto comercial</button>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
            <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
            <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
        </div>
    </div>
    <div class="imgs-vistas">
        <img src="<?= $ruta ?>img/nuevas/televideo-fabrica-monitores.png" alt="" title=""/>
    </div>
</section>

<section class="section" id="section3">
    <div class="content">
        <div class="info-vistas text-televideo" style="width: 330px;">
            <h1><strong>Televideo</strong><br><span style="font-size: 0.7em;">para hogares y empresas</span></h1>
            <h6>Cuidamos lo que más quiere</h6>
            <p><em>Observe su hogar o empresa, desde cualquier dispositivo móvil.</em></p>
            <button class="btn-comprar">Contacto comercial</button>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
            </div>
        </div>
        <div class="imgs-vistas">
            <img src="<?= $ruta ?>img/nuevas/televideo-televiu.png" alt="" title=""/>
        </div>
    </div>
</section>

<section class="section" id="section4">
    <div class="content">
        <div class="info-vistas text-televideo" style="width: 330px;">
            <h1><strong>Televideo</strong><br><span style="font-size: 0.7em;">para hogares y empresas</span></h1>
            <h6>Reacción motorizada</h6>
            <p><em>Si se detecta una señal efectiva del servicio de televideo TELESENTINEL procederá a enviar un supervisor motorizado.</em></p>
            <button class="btn-comprar">Contacto comercial</button>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank" class="facebook"><img src="<?= $ruta ?>img/nuevas/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank" class="Instagram"><img src="<?= $ruta ?>img/nuevas/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank" class="youtube"><img src="<?= $ruta ?>img/nuevas/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
            </div>
        </div>
        <div class="imgs-vistas">
            <img src="<?= $ruta ?>img/nuevas/televideo-moto.png" alt="" title=""/>
        </div>
    </div>
</section>