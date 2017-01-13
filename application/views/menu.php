<?php $ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$ini = isset($inicio) ? $inicio : ''; ?>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top menu">
    <div class="container-fluid">
        <div class="navbar-header">
            <figure class="logo-cell"></figure>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu-home" aria-expanded="false" id="navigatoricon" onclick="navigatoricon()">
                <span class="fa fa-list" style="color:#fff;"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-menu-home">
            <ul class="nav navbar-nav" id="menu-activo">
                <li id="icon-logo">
                    <a href="<?= $ini ?>">
                        <img class="logo" itemprop="logo" src="<?= $ruta ?>img/logo-telesentinel.png" alt="Logotipo telesentinel"/>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:scrollToMonitoreo();" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Monitoreo de Alarmas<span class="caret"></span></a>
                    <ul class="dropdown-menu menu-desplegable dropdownhover-bottom">
                        <li><a href="<?= $section ?>monitoreo/">Monitoreo de alarmas</a></li>
                        <li><a href="<?= $section ?>equipos/">Equipos de Monitoreo</a></li>
                        <li><a href="<?= $section ?>monitoreo/#beneficios">Beneficios de nuestro servicio</a></li>
                    </ul>
                </li>
                <li><a href="<?= $ini ?>#bg-two">Televideo</a></li>
                <li><a href="<?= $ini ?>#bg-three">Rastreo Vehicular</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ciudades<span class="caret"></span></a>
                    <ul class="dropdown-menu menu-desplegable">
                        <li><a href="<?= $section ?>barranquilla/">Barranquilla</a></li>
                        <li><a href="<?= $section ?>bucaramanga/">Bucaramanga</a></li>
                        <li><a href="<?= $section ?>cali/">Cali</a></li>
                        <li><a href="<?= $section ?>girardot/">Girardot</a></li>
                        <li><a href="<?= $section ?>medellin/">Medellín</a></li>
                        <li><a href="<?= $section ?>tunja/">Tunja</a></li>
                        <li><a href="<?= $section ?>valledupar/">Valledupar</a></li>
                        <li><a href="<?= $section ?>villavicencio/">Villavicencio</a></li>
                    </ul>
                </li>
                <li><a href="javascript:scrollToContacto();">Contacto</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list-ol" aria-hidden="true"></i><span class="caret"></span></a>
                    <ul class="dropdown-menu menu-desplegable">
                        <li><a href="/pagoonline/" target="_blank"><figure class="icon-pse"></figure> Pagos seguros en línea</a></li>
                        <li><a href="https://get.teamviewer.com/telesen" target="_blank"><figure class="icon-qs"></figure>Soporte Telesentinel QS</a></li>
                        <li><a href="<?= $section ?>pqr/">Servicio al cliente</a></li>
                        <li><a href="<?= $section ?>trabajo/">Trabaje con nosotros</a></li>
                        <li><a href="http://telesentinel.servertrack.co/telesentinel/index.php" target="_blank">Rastreo vehicular</a></li>
                        <li><a href="<?= $ruta ?>/blog/" target="_blank">Blog</a></li>
                        <li><a href="/web/index.php" target="_blank">Portal comercial web</a></li>
                        <li><a href="https://mail.telesentinel.com/" target="_blank">Correo institucional</a></li>
                        <li><a href="<?= $section ?>sitemap/">Mapa del sitio</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>