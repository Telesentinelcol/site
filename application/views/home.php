<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$ini = isset($inicio) ? $inicio : '';
?>
<div id="fullpage" itemscope itemtype ="http://schema.org/Product">
    <!--Sección de monitoreo de alarmas-->
    
    <div class="section " id="section0">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas">
                    <h1><strong>Tele</strong><br><span>monitoreo</span></h1>
                    <h6>Sistema de monitoreo de alarmas para hogares</h6>
                    <p><em>Protegemos su hogar o negocio en caso de emergencia</em></p>
                    <button class="btn-comprar"><a href="http://dev.telesentinel.info/design/monitoreo/">Conocer más</a></button>
                    <button class="btn-comprar">Contáctenos</button>
                    <div class="redes-sociales">
                        <a href="#" class="facebook"><img src="<?= $ruta ?>img/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                        <a href="#" class="Instagram"><img src="<?= $ruta ?>img/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                        <a href="#" class="youtube"><img src="<?= $ruta ?>img/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="img-monitoreo">
                    <img src="<?= $ruta ?>img/monitoreo-de-alarmas.png" alt="monitoreo de alarmas" title="monitoreo de alarmas"/>
                </div>
            </div>
        </div>
    </div>
    
    <!--Sección de televideo-->
    <div class="section" id="section1">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas" style="width: 290px;">
                    <h1><strong>Tele</strong><br><span>video</span></h1>
                    <h6>Sistema de video vigilancia para hogares y empresas</h6>
                    <p><em>Visualizamos sus cámaras en caso de emergencia</em></p>
                    <button class="btn-comprar">Conocer más</button>
                    <button class="btn-comprar">Contáctenos</button>
                    <div class="redes-sociales">
                        <a href="#" class="facebook"><img src="<?= $ruta ?>img/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                        <a href="#" class="Instagram"><img src="<?= $ruta ?>img/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                        <a href="#" class="youtube"><img src="<?= $ruta ?>img/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <video width="170" style="position: absolute; top: 264px; left: 116px; z-index: 1;" id="televideo1" autoplay="autoplay">
                    <source src="<?= $ruta ?>video/ladron-en-casa.mp4" type="video/mp4">
                    <source src="<?= $ruta ?>video/ladron-en-casa.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <video width="170" style="position: absolute; top: 264px; left: 303px; z-index: 1;" id="televideo2">
                    <source src="<?= $ruta ?>video/robo-tienda.mp4" type="video/mp4">
                    <source src="<?= $ruta ?>video/robo-tienda.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <video width="170" style="position: absolute; top: 264px; left: 488px; z-index: 1;" id="televideo3">
                    <source src="<?= $ruta ?>video/casa-hurto.mp4" type="video/mp4">
                    <source src="<?= $ruta ?>video/casa-hurto.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class="img-monitoreo">
                    <img src="<?= $ruta ?>img/televideo.png" alt="Sistema de video vigilancia" title="Sistema de video vigilancia"/>
                </div>
            </div>
        </div>
    </div>
    <!--Sección de rastreo-->
    <div class="section" id="section2">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas">
                    <h1><strong>Tele</strong><br><span>rastreo</span></h1>
                    <h6>Sistema de rastreo vehicular y motos</h6>
                    <p><em>Ubicación y administración de vehículo de forma remota</em></p>
                    <button class="btn-comprar">Conocer más</button>
                    <button class="btn-comprar">Contáctenos</button>
                    <div class="redes-sociales">
                        <a href="#" class="facebook"><img src="<?= $ruta ?>img/icon-facebook.png" alt="Telesentinel en Facebook" title="Telesentinel en Facebook"/></a>
                        <a href="#" class="Instagram"><img src="<?= $ruta ?>img/icon-instagram.png" alt="Telesentinel en Instagram" title="Telesentinel en Instagram"/></a>
                        <a href="#" class="youtube"><img src="<?= $ruta ?>img/icon-youtube.png" alt="Telesentinel en Youtube" title="Telesentinel en Youtube"/></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="img-monitoreo">
                    <img src="<?= $ruta ?>img/rastreo-vehicular.png" alt="monitoreo de alarmas" title="monitoreo de alarmas"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="content">

<section class="section animated fadeIn" id="bg-zero">
    <div class="dummy-pois">
        <div class="tooltip tooltip-east monitoreo-zero-tooltip md-trigger">
            <a href="<?= $ruta ?>monitoreo/"><span class="tooltip-item"></span></a>
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
        </div>
    </div>
    <div class="bg-moto-home animated fadeInLeft">
        <img src="<?= $ruta ?>img/moto-home.png" alt="Placa Telesentinel" title="Supervisor de monitoreo de alarmas"/>
    </div>
    <div class="md-trigger">
        <div id="img-logo" onclick="javascript:scrollToScreen(2)">
            <img src="<?= $ruta ?>img/placa.svg" alt="Placa Telesentinel" class="img-logo"/>
        </div>
    </div>
    <div class="info-text animated fadeInLeft">
        <a href="<?= $section ?>monitoreo/">
            <h2 class="titulo-one" itemprop="name">Monitoreo de Alarmas</h2>
        </a>
        <p class="texto-informativo" itemprop="description">Protegemos su hogar o negocio en caso de emergencia</p>
        <a class="vermas" href="<?= $section ?>monitoreo/" itemprop="url">
            <div class="md-trigger">Conocer más
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </div>
            <span class="icon-right"></span>
        </a>
    </div>
    <a href="javascript:scrollToTelevideo();"><div class="abajo"></div></a>
</section>-->

<!--<section class="section" id="bg-two">
    <div class="oculto"></div>
    <div class="dummy dummy-image">
        <div class="dummy-pois">
            <div class="tooltip tooltip-west televideo-tooltip md-trigger">
                <a href="<?= $ini ?>televideo/">
                    <span class="tooltip-item"></span>
                </a>
                <span class="tooltip-content hometooltip4">Haga
                    <a href="<?= $ini ?>televideo/" class="click">click aquí</a> para conocer más de nuestro Servicio de Televideo
                </span>
            </div>
        </div>
    </div>
    <div class="info-text animated fadeInLeft">
        <a href="<?= $ini ?>televideo/">
            <h2 class="titulo-one ti-televideo" itemprop="name">Televideo</h2>
        </a>
        <p class="texto-informativo" itemprop="description">Visualizamos sus cámaras en caso de emergencia.</p>
        <a class="vermas" href="<?= $ini ?>televideo/" itemprop="url">
            <div class="md-trigger">Conocer más
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </div>
            <span class="icon-right"></span>
        </a>
    </div>
    <a href="javascript:scrollToRastreo();">
        <div class="abajo"></div>
    </a>
</section>-->

<!--<section class="section" id="bg-three">
    <div class="oculto"></div>
    <div class="dummy dummy-image">
        <div class="dummy-pois">
            <div class="tooltip tooltip-west rastreo-tooltip md-trigger">
                <a href="<?= $ini ?>rastreo/">
                    <span class="tooltip-item"></span>
                </a>
                <span class="tooltip-content hometooltip5">Haga <a href="<?= $ini ?>rastreo/" class="click">click aquí</a> para conocer más de nuestro Servicio de rastreo vehicular</span>
            </div>
        </div>
    </div>
    <div class="md-trigger">
        <div id="img-rastreo" style="position:relative;">
            <img class="img-rastreo" src="<?= $ruta ?>img/automovil-telesentinel.png" alt="Automovil con el servicio de rastreo vehícular de telesentinel">
        </div>
    </div>
    <img class="ondas" src="<?= $ruta ?>img/ondas.gif" alt="Transmisión de ondas de pánico de vehículo con sistema de rastreo vehicular de telesentinel"/>
    <img class="ondasedificio" src="<?= $ruta ?>img/ondas.gif" alt="Recepción de ondas y de transmisión de señal de telesentinel"/>
    <div class="info-text animated fadeInLeft">
        <a href="<?= $ini ?>rastreo/">
            <h2 class="titulo-one" itemprop="name">Rastreo vehicular</h2>
        </a>
        <p class="texto-informativo" itemprop="description">Ubicación y administración de vehículo de forma remota</p>
        <a class="vermas" href="<?= $ini ?>rastreo/" itemprop="url">
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
</div>-->

<script type="text/javascript">
    
    $(document).ready(function () {
        setInterval(function() { temporizador()},  15000);
    });
    
    function temporizador(){
        setTimeout(function(){ intervalos(1); }, 3000);
        setTimeout(function(){ intervalos(2); }, 8000);
        setTimeout(function(){ intervalos(3); }, 12000);
    }
    
    function intervalos(tipo){
        
        console.log('Entro');
        
        var vid = document.getElementById("televideo1");
        var vid2 = document.getElementById("televideo2");
        var vid3 = document.getElementById("televideo3");
        
        if (tipo == 1) {
            vid.play();
        }

        if (tipo == 2) {
            vid2.play();
        }
        
        if (tipo == 3) {
            vid3.play();
        }
        
        return false;
    }
</script>    