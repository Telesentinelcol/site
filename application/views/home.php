<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$ini = isset($inicio) ? $inicio : '';
?>
<div id="fullpage" itemscope itemtype ="http://schema.org/Product">

    <div class="section " id="section0">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas" style="width: 330px; margin-top: 250px;">
                    <h1><strong>Tele</strong><br><span>monitoreo</span></h1>
                    <h6>Sistema de monitoreo de alarmas para hogares</h6>
                    <p><em>Protegemos su hogar o negocio en caso de emergencia</em></p>
                    <button class="btn-comprar"><a href="http://dev.telesentinel.info/design/monitoreo/">Conocer más</a></button>
                    <button class="btn-comprar">Contacto comercial</button>
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

    <div class="section" id="section1">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas" style="width: 290px; margin-top: 250px;">
                    <h1><strong>Tele</strong><br><span>video</span></h1>
                    <h6>Sistema de video vigilancia para hogares y empresas</h6>
                    <p><em>Visualizamos sus cámaras en caso de emergencia</em></p>
                    <button class="btn-comprar">Conocer más</button>
                    <button class="btn-comprar">Contacto comercial</button>
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

    <div class="section" id="section2">
        <div class="contenedor">
            <div class="col-md-3">
                <div class="info-vistas" style="width: 330px; margin-top: 250px;">
                    <h1><strong>Tele</strong><br><span>rastreo</span></h1>
                    <h6>Sistema de rastreo vehicular y motos</h6>
                    <p><em>Ubicación y administración de vehículo de forma remota</em></p>
                    <button class="btn-comprar">Conocer más</button>
                    <button class="btn-comprar">Contacto comercial</button>
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


<script type="text/javascript">

    $(document).ready(function () {
        setInterval(function () {
            temporizador()
        }, 15000);
    });

    function temporizador() {
        setTimeout(function () {
            intervalos(1);
        }, 3000);
        setTimeout(function () {
            intervalos(2);
        }, 8000);
        setTimeout(function () {
            intervalos(3);
        }, 12000);
    }

    function intervalos(tipo) {

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