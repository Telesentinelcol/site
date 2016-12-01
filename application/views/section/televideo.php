<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo-televideo">
        <ul>
            <li><a href="javascript:scrollToApartamento();">Televideo hogar</a></li>
            <li><a href="javascript:scrollToFabrica();">Televideo empresa</a></li>
            <li><a href="javascript:scrollToTelevideo3();">Observe su empresa</a></li>
            <li><a href="javascript:scrollToTelevideo4();">Observe su hogar</a></li>
            <li><a href="javascript:scrollToTelevideo5();">Reacción motorizada</a></li>
        </ul>
    </figure>
    <section class="section" id="bg-apartamento">
        <div class="dummy-pois">
            <a href="productos/camara.html">
                <div class="tooltip tooltip-west televideo-tooltip-1 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-a.png" alt=""/>
                        <span>Cámara de video</span>
                    </span>
                </div>
            </a>
            <a href="productos/camara-domo.html">
                <div class="tooltip tooltip-east televideo-tooltip-2 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-b.png" alt=""/>
                        <span>Cámara domo</span>
                    </span>
                </div>
            </a>
            <a href="productos/camara.html">
                <div class="tooltip tooltip-east televideo-tooltip-3 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-a.png" alt=""/>
                        <span>Cámara de video</span>
                    </span>
                </div>
            </a>
        </div>
        <div class="info-text">
            <h3 class="titulo-one">Televideo para hogar</h3>
            <p class="texto-informativo">
                Diseñamos la seguridad de su hogar
            </p>
            <a class="vermas" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToFabrica();"><div class="abajomonitoreo"></div></a>
    </section>

    <section class="section" id="bg-fabrica">
        <div class="dummy-pois">
            <a href="productos/camara-domo.html">
                <div class="tooltip tooltip-west televideo-tooltip-4 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-b.png" alt=""/>
                        <span>Cámara domo</span>
                    </span>
                </div>
            </a>
            <a href="productos/camara.html">
                <div class="tooltip tooltip-west televideo-tooltip-5 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-a.png" alt=""/>
                        <span>Cámara de video</span>
                    </span>
                </div>
            </a>
            <a href="productos/camara-domo.html">
                <div class="tooltip tooltip-west televideo-tooltip-6 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-b.png" alt=""/>
                        <span>Cámara domo</span>
                    </span>
                </div>
            </a>
            <a href="productos/camara.html">
                <div class="tooltip tooltip-east televideo-tooltip-7 md-trigger">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        <img class="icon-infrarrojo" src="<?= $ruta ?>img/equipos/camara-a.png" alt=""/>
                        <span>Cámara de video</span>
                    </span>
                </div>
            </a>
        </div>
        <div class="info-text">
            <h3 class="titulo-one">Televideo para empresas</h3>
            <p class="texto-informativo">
                Diseñamos la seguridad de su fábrica o negocio
            </p>
            <a class="vermas" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToTelevideo3();"><div class="abajomonitoreo"></div></a>
    </section>

    <section class="section" id="televide3">
        <div class="row">
            <div class="col-xs-12 col-ms-6 col-md-12 col-lg-3 margen-top">    
                <!--<p class="lead textelevideo text-center">Visualizamos desde la central de monitoreo, las imágenes cuando se recibe la señal de intrusión o pánico.</p>-->
                <div class="info-text text-televio-3">
                    <h3 class="titulo-one">Proteja su empresa</h3>
                    <p class="texto-informativo">Visualizamos desde la central de monitoreo, las imágenes cuando se recibe la señal de intrusión o pánico.</p>	
                    <a class="vermas" href="#contacto" itemprop="url">
                        <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                        <span class="icon-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-ms-6 col-md-12 col-lg-9">
                <img src="<?= $ruta ?>img/ondas.gif" alt="ondas" class="ondas-televiu"/>
                <figure class="bg-televideo-fabrica"></figure>
            </div>
        </div>
        <a href="javascript:scrollToTelevideo4();"><div class="abajomonitoreo"></div></a>
    </section>
    <section class="section" id="televide4">
        <div class="row">
            <div class="col-xs-12 col-ms-6 col-md-12 col-lg-9"> 
                <figure class="bg-televiu"></figure>
            </div>
            <div class="col-xs-12 col-ms-6 col-md-12 col-lg-3">
                <div class="info-text text-televiu">
                    <h3 class="titulo-one">Cuidamos lo que más quiere</h3>
                    <p class="texto-informativo">
                        Observe su hogar o empresa, desde cualquier dispositivo móvil.
                    </p>
                    <a class="vermas" href="#contacto" itemprop="url">
                        <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                        <span class="icon-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <a href="javascript:scrollToTelevideo5();"><div class="abajomonitoreo"></div></a>
    </section>
    <section class="section" id="televide5">
        <div class="row">
            <div class="col-xs-12 col-ms-6 col-md-6 col-lg-6">    
                <p class="lead textelevideo text-center"><strong>Reacción motorizada</strong><br> Si se detecta una señal efectiva del servicio de televideo TELESENTINEL procederá a enviar un supervisor motorizado.</p>
                <a class="vermas text-center" href="#contacto" itemprop="url">
                    <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                    <span class="icon-right"></span>
                </a>
            </div>
            <div class="col-xs-12 col-ms-6 col-md-6 col-lg-6">
                <figure class="bg-moto"></figure>
            </div>
        </div>
        <a href="javascript:scrollToContacto();"><div class="abajomonitoreo"></div></a>
    </section>
</div>
