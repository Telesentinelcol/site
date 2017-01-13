<?php $ruta = isset($rut) ? $rut : ''; 
$section = isset($section) ? $section : ''; ?>
<footer id="contacto">
    <div class="row datos-contacto">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="formContacto"></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="frase-footer">
                <p>Si está interesado en otras consultas, elija alguna de estas opciones</p>
                <a href="<?= $section ?>pqr/" class="btn-servicio">Servicio al cliente</a>
                <a href="<?= $section ?>trabajo/" class="btn-trabajo">Trabaje con nosotros</a>
            </div>
            <ul class="telefonos" itemscope itemtype ="http://schema.org/PostalAddress">
                <li><b itemprop="addressLocality">Bogotá:</b> <span itemprop="telephone"> (+57-1) 288 87 88 opción 2</span></li>
                <li><b itemprop="addressLocality">Medellin:</b><span itemprop="telephone">(+57-4) 268 92 22</span></li>
                <li><b itemprop="addressLocality">Bucaramanga: </b><span itemprop="telephone">(+57-7) 691 79 79</span></li>
                <li><b itemprop="addressLocality">Cali: </b><span itemprop="telephone">(+57-2) 386 00 00 - 668 35 35</span></li>
                
            </ul>
            <ul class="telefonos" itemscope itemtype ="http://schema.org/PostalAddress">
                <li><b itemprop="addressLocality">Villavicencio:</b><span itemprop="telephone">(+57-8) 682 80 80</span></li>
                <li><b itemprop="addressLocality">Valledupar:</b><span itemprop="telephone"> (+57-5) 584 05 55</span></li>
                <li><b itemprop="addressLocality">Barranquilla:</b><span itemprop="telephone">(+57-1) 288 87 88</span></li>
                <li><b itemprop="addressLocality">Chía - Funza - Girardot - Tunja:</b><span itemprop="telephone">(+57-1) 288 87 88</span></li>
            </ul>
        </div>
    </div>
    <div class="row footer-nav" style="margin-top: 100px;">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <h3>Clientes</h3>
            <ul class="nav-footer">
                <li><a href="/pagoonline/" target="_blank"><figure class="icon-pse-footer"></figure>Pagos seguros en línea</a></li>
                <li><a href="http://telesentinel.servertrack.co/telesentinel/index.php" target="_blank">Rastreo vehicular</a></li>
                <li><a href="/blog/" target="_blank">Blog</a></li>
                <li><a href="section/sitemap.html" target="_blank">Mapa del Sitio</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margen-telefonos">
            <h3>Institucional</h3>
            <ul>
                <li><a href="https://get.teamviewer.com/telesen" target="_blank"><figure class="icon-qs-footer"></figure>Soporte Telesentinel QS</a></li>
                <li><a href="/web/index.php" target="_blank">Portal comercial web</a></li>
                <li><a href="https://mail.telesentinel.com/" target="_blank">Correo institucional</a></li>
            </ul>
            <a href="https://www.instagram.com/telesentinel_colombia/" target="_blank"><img src="<?= $ruta ?>img/instagram.png" alt="Ingrese al Instagram de telesentinel"/></a>
            <a href="https://www.youtube.com/channel/UC4rXZH9n3P29WJqaiQTTr_A" target="_blank"><img src="<?= $ruta ?>img/youtube.png" alt="Ingrese al YouTube de telesentinel"/></a>
            <a href="https://plus.google.com/u/0/102528538861567502805" target="_blank"><img src="<?= $ruta ?>img/googleplus.png" alt="Ingrese al Google Plus de telesentinel"/></a>
            <a href="https://www.facebook.com/TelesentinelOficial/" target="_blank"><img src="<?= $ruta ?>img/facebook.png" alt="Ingrese al Facebook de telesentinel"/></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 derechos-reservados">
            <p class="lead">Vigilado Supervigilancia Resolución Nº20147200101617 de 26-11-2014 Telesentinel LTDA © 2015. Todos los Derechos Reservados.</p>
        </div>
        <a href="javascript:scrollToTop();"><div class="arriba"></div></a>
    </div>
</footer>
</body>
</html>