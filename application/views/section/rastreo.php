<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo-rastreo">
        <ul>
            <li><a href="javascript:scrollToRastreo1()">Localice su vehículo</a></li>
            <li><a href="javascript:scrollToRastreo2()">¿Como funciona?</a></li>
            <li><a href="javascript:scrollToRastreo3();">Beneficios de Rastreo vehicular</a></li>
            <li><a href="javascript:scrollToRastreo4();">Conoce más de nuestro servicio</a></li>
        </ul>
    </figure>
    <div class="row section" id="rastreo-a">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated fadeInLeft">
            <figure class="bg-rastreo-ab"></figure>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-cali animated fadeInRight">
            <h2 class="titulo-one text-center">¿Señal de pánico?</h2>
            <p class="texto-informativo text-center">Atención de señales de pánico recibidas efectivamente en nuestra central de monitoreo Telesentinel</p>
            <a class="vermas text-center" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToRastreo1();">
            <div class="abajo"></div>
        </a>
    </div>
    <div class="row section" id="rastreo1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 titulo-rastreo">
            <h2>Localice su vehículo desde un dispositivo móvil</h2>
            <a class="vermas text-center" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img class="img-responsive cel-rastreo" src="<?= $ruta ?>img/rastreo/mano-celular.png" alt="">
        </div>
        <a href="javascript:scrollToRastreo2()"><div class="abajo"></div></a>
    </div>
    <div class="row section" id="rastreo2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="titulo-rastreo-2 animated fadeInLeft">¿Como Funciona?</h2>
            <p class="texto-rastreo animated fadeInRight">Atención de señales de pánico recibidas efectivamente en nuestra central de monitoreo
                Telesentinel
            </p>
            <div class="tooltip tooltip-west rastreo-one">
                <span class="tooltip-item" id="icon-gs"></span>
                <span class="tooltip-content">
                    <a href="#">
                        <span>Realice un control de recorrido a través de nuestra plataforma web y móvil.</span>
                    </a>
                </span>
            </div>
            <div class="tooltip tooltip-west rastreo-two">
                <span class="tooltip-item" id="icon-ap"></span>
                <span class="tooltip-content">
                    <a href="#">
                        <span>Podrá conocer y cambiar el estado del vehículo (Encendido y apagado)</span>
                    </a>
                </span>
            </div>
        </div>
        <a href="javascript:scrollToRastreo3();">
            <div class="abajo"></div>
        </a>
    </div>
    <div class="row section" id="rastreo3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Beneficios de nuestro servicio de sistema de rastreo vehicular</h2>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img src="<?= $ruta ?>img/bg-rastreo-3.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <ul class="listado-rastreo">
                <li><figure class="icon-ubicacion"></figure><p>Ubicación de vehículo</p></li>
                <li><figure class="icon-encedido"></figure><p>Encendido y apagado</p></li>
                <li><figure class="icon-crecorrido"></figure><p>Control de recorrido</p></li>
                <li><figure class="icon-reportes"></figure><p>Reportes históricos</p></li>
                <li><figure class="icon-rmovil"></figure><p>En su dispositivo móvil</p></li>
                <li><figure class="icon-velocidad"></figure><p>Datos de velocidad</p></li>
            </ul>
            <a class="vermas text-center" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToRastreo4();"><div class="abajo"></div></a>
    </div>
    <div class="row section" id="rastreo4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Conoce más de nuestro servicio</h2>
            <ul>
                <li>Atención de señal de pánico recibida efectivamente en la central de monitoreo.</li>
                <li>Acceso a la plataforma de rastreo vehicular a través de www.telesentinel.com por parte del usuario para consultar:</li>
                <li>Datos de velocidad aproximada del vehículo, reportada por GPS</li>
                <li>Estado del vehículo (Encendido / Apagado) Trazos de recorrido</li>
                <li>Ubicación: latitud / longitud y verificación en mapas con georeferenciación</li>
            </ul>
            <a class="vermas text-center" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToContacto()"><div class="abajo"></div></a>
    </div>
</div>