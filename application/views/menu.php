<?php
$ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$ini = isset($inicio) ? $inicio : '';
?>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="<?= $ini ?>">
                        <img src="<?= $ruta ?>img/logo-telesentinel.png" alt="Logotipo de telesentinel" title="Logotipo de telesentinel"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= $section ?>/monitoreo"><figure class="icon-telemonitoreo"></figure>Monitoreo</a></li>
                        <li><a href="<?= $section ?>/televideo"><figure class="icon-televideo"></figure>Televideo</a></li>
                        <li><a href="<?= $section ?>/rastreo"><figure class="icon-telerastreo"></figure>Rastreo</a></li>
                        <li><a href="/pagoonline/"><figure class="icon-pse"></figure>Pago en linea</a></li>
                        <!--<li class="otros"><a href="#"><figure class="icon-servicios"></figure>Más servicios</a></li>-->
                        <li class="otros"><a href="#"><figure class="icon-contacto"></figure>Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="fullpage" itemscope itemtype ="http://schema.org/Product">