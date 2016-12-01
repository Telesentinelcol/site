<?php  $ruta = isset($rut) ? $rut : ''; $section = isset($section) ? $section : ''; $ini = isset($inicio) ? $inicio : ''; ?>
<div class="content" itemscope itemtype ="http://schema.org/Product">
    <figure class="logotipo"></figure>
    <section class="section animated fadeIn" id="bg-zero">
        <div class="dummy-pois">
            <div class="tooltip tooltip-east monitoreo-zero-tooltip md-trigger">
                <a href="<?= $ruta?>monitoreo/"><span class="tooltip-item"></span></a>
                <span class="tooltip-content hometooltip1">Haga <a href="<?= $section ?>monitoreo/" class="click">click aquí</a> para conocer más de nuestro Servicio de Monitoreo de Alarmas</span>
            </div>
            <div class="tooltip tooltip-east televideo-zero-tooltip md-trigger">
                <a href="javascript:scrollToTelevideo();"><span class="tooltip-item"></span></a>
                <span class="tooltip-content hometooltip2">Haga <a href="javascript:scrollToTelevideo();" class="click">click aquí</a> para conocer más de nuestro Servicio de Televideo</span>
            </div>
            <div class="tooltip tooltip-east rastreo-zero-tooltipp md-trigger">
                <a href="javascript:scrollToRastreo();">
                    <span class="tooltip-item"></span>
                </a>
                <span class="tooltip-content hometooltip3">Haga
                    <a href="javascript:scrollToRastreo();" class="click">click aquí</a> para conocer más de nuestro Servicio de Rastreo Vehicular
                </span>
            </div>
        </div>
        <div class="bg-moto-home animated fadeInLeft">
            <img src="<?= $ruta?>img/moto-home.png" alt="Placa Telesentinel" title="Supervisor de monitoreo de alarmas"/>
        </div>
        <div class="md-trigger">
            <div id="img-logo" onclick="javascript:scrollToScreen(2)">
                <img src="<?= $ruta?>img/placa.svg" alt="Placa Telesentinel" class="img-logo"/>
            </div>
        </div>
        <div class="info-text animated fadeInLeft">
            <a href="<?= $section?>monitoreo/">
                <h2 class="titulo-one" itemprop="name">Monitoreo de Alarmas</h2>
            </a>
            <p class="texto-informativo" itemprop="description">Protegemos su hogar o negocio en caso de emergencia</p>
            <a class="vermas" href="<?= $section?>monitoreo/" itemprop="url">
                <div class="md-trigger">Conocer más
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToTelevideo();"><div class="abajo"></div></a>
    </section>
    <section class="section" id="bg-two">
        <div class="oculto"></div>
        <div class="dummy dummy-image">
            <div class="dummy-pois">
                <div class="tooltip tooltip-west televideo-tooltip md-trigger">
                    <a href="<?= $ini?>televideo/">
                        <span class="tooltip-item"></span>
                    </a>
                    <span class="tooltip-content hometooltip4">Haga
                        <a href="<?= $ini?>televideo/" class="click">click aquí</a> para conocer más de nuestro Servicio de Televideo
                    </span>
                </div>
            </div>
        </div>
        <img class="ondasedificio" src="<?= $ruta?>img/ondas.gif" alt="Transmisión de señal del servicio de televideo con telesentincel"/>
        <div class="info-text animated fadeInLeft">
            <a href="<?= $ini?>televideo/">
                <h2 class="titulo-one ti-televideo" itemprop="name">Televideo</h2>
            </a>
            <p class="texto-informativo" itemprop="description">Visualizamos sus cámaras en caso de emergencia.</p>
            <a class="vermas" href="<?= $ini?>televideo/" itemprop="url">
                <div class="md-trigger">Conocer más
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToRastreo();">
            <div class="abajo"></div>
        </a>
    </section>
    <section class="section" id="bg-three">
        <div class="oculto"></div>
        <div class="dummy dummy-image">
            <div class="dummy-pois">
                <div class="tooltip tooltip-west rastreo-tooltip md-trigger">
                    <a href="<?= $ini?>rastreo/">
                        <span class="tooltip-item"></span>
                    </a>
                    <span class="tooltip-content hometooltip5">Haga <a href="<?= $ini?>rastreo/" class="click">click aquí</a> para conocer más de nuestro Servicio de rastreo vehicular</span>
                </div>
            </div>
        </div>
        <div class="md-trigger">
            <div id="img-rastreo" style="position:relative;">
                <img class="img-rastreo" src="<?= $ruta?>img/automovil-telesentinel.png" alt="Automovil con el servicio de rastreo vehícular de telesentinel">
            </div>
        </div>
        <img class="ondas" src="<?= $ruta?>img/ondas.gif" alt="Transmisión de ondas de pánico de vehículo con sistema de rastreo vehicular de telesentinel"/>
        <img class="ondasedificio" src="<?= $ruta?>img/ondas.gif" alt="Recepción de ondas y de transmisión de señal de telesentinel"/>
        <div class="info-text animated fadeInLeft">
            <a href="<?= $ini?>rastreo/">
                <h2 class="titulo-one" itemprop="name">Rastreo vehicular</h2>
            </a>
            <p class="texto-informativo" itemprop="description">Ubicación y administración de vehículo de forma remota</p>
            <a class="vermas" href="<?= $ini?>rastreo/" itemprop="url">
                <div class="md-trigger">Conocer más
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </div>
                <span class="icon-right"></span>
            </a>
        </div>
        <a href="javascript:scrollToContacto();">
            <div class="abajo"></div>
        </a>
    </section>
</div>