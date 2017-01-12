<?php $ruta = isset($rut) ? $rut : '';
$section = isset($section) ? $section : '';
$ini = isset($inicio) ? $inicio : ''; ?>
<body>
        <header>
            <nav class="menu">
                <ul>
                    <li class="logo">
                        <a href="<?= $ini ?>">
                            <img src="<?= $ruta ?>img/logo-telesentinel.png" alt="Logotipo de telesentinel" title="Logotipo de telesentinel"/>
                        </a>
                    </li>
                    <li><a href="<?= $section ?>"><figure class="icon-telemonitoreo"></figure>Telemonitoreo</a></li>
                    <li><a href="<?= $ini ?>#bg-two"><figure class="icon-televideo"></figure>Televideo</a></li>
                    <li><a href="<?= $ini ?>#bg-three"><figure class="icon-telerastreo"></figure>Telerastreo</a></li>
                    <li class="pago-factura"><a href="/pagoonline/"><figure class="icon-pse"></figure>Pague su factura</a></li>
                </ul>
            </nav>
        </header>
    
<!--<nav class="navbar navbar-inverse navbar-fixed-top menu">
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
                        <img class="logo" itemprop="logo" title="Logo de telesentinel" src="<?= $ruta ?>img/logo-telesentinel.png" alt="Logotipo telesentinel"/>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:scrollToMonitoreo();" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown"><img src="<?= $ruta ?>img/icon-menu/telemonitoreo.png" alt="icon-rastreo" title="icon-telemonitoreo"/><br>Telemonitoreo<span class="caret"></span></a>
                    <ul class="dropdown-menu menu-desplegable dropdownhover-bottom">
                        <li><a href="<?= $section ?>monitoreo/">Monitoreo de alarmas</a></li>
                        <li><a href="<?= $section ?>equipos/">Equipos de Monitoreo</a></li>
                        <li><a href="<?= $section ?>monitoreo/#beneficios">Beneficios de nuestro servicio</a></li>
                    </ul>
                </li>
                <li><a href="<?= $ini ?>#bg-two"> <img src="<?= $ruta ?>img/icon-menu/televideo.png" alt="icon-televideo" title="icon-televideo"/><br>Televideo</a></li>
                <li><a href="<?= $ini ?>#bg-three"> <img src="<?= $ruta ?>img/icon-menu/telerastreo.png" alt="icon-rastreo" title="icon-telerastreo"/><br>Telerastreo</a></li>
                <li class="icon-menu-pse"><a href="/pagoonline/" target="_blank"><img src="<?= $ruta ?>img/icon-menu/icon-pse.png" alt="icon-pse" title="icon-pse"/><br> Pague su factura</a></li>
                <li><a href="javascript:scrollToContacto();"><img src="" alt="icon-contacto" title="icon-contacto"/><br>Contacto</a></li>
                
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
                </li>-->
                
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list-ol" aria-hidden="true"></i><span class="caret"></span></a>
                    <ul class="dropdown-menu menu-desplegable">
                        <li><a href="/pagoonline/" target="_blank"><figure class="icon-pse"></figure> Pagos seguros en línea</a></li>
                        <li><a href="https://get.teamviewer.com/telesen" target="_blank"><figure class="icon-qs"></figure>Soporte Telesentinel QS</a></li>
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
</nav>-->