<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo"></figure>
    <div class="row section" id="Tunja1">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-cali">
            <h2 class="titulo-one">TUNJA</h2>
            <p class="texto-informativo">La libertad, es poder disfrutar de las cosas bonitas.<br>TELESENTINEL te da más.</p>
            <a class="vermas" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <figure class="bg-tunja"></figure>
        </div>
        <a href="javascript:scrollToTunja2();">
            <div class="abajo"></div>
        </a>
    </div>
    <div class="row section" id="Tunja2">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 text-cali">
            <h2 class="titulo-one">Tunja</h2>
            <p class="texto-informativo">Telesentinel siempre te da más<br>adquiere uno de nuestros servicios</p>
            <a class="vermas" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
            <div id="coverflow">
                <ul class="flip-items">
                    <li>
                        <figure class="oferta-cali1">
                            <a href="javascript:scrollToScreen(3)" class="conocer-mas"></a>
                        </figure>
                    </li>
                    <li>
                        <figure class="oferta-cali2">
                            <a href="javascript:scrollToScreen(1)" class="conocer-mas"></a>
                        </figure>
                    </li>
                    <li>
                        <figure class="oferta-cali3">
                            <a href="javascript:scrollToScreen(4)" class="conocer-mas"></a>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
        <a href="javascript:scrollToTunja3();">
            <div class="abajo"></div>
        </a>
    </div>
    <script>
        var coverflow = $("#coverflow").flipster();
    </script>
    <div class="row section" id="Tunja3">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-cali">
            <h2 class="titulo-one">ALIANZA MAPFRE TELESENTINEL</h2>
            <p class="texto-informativo">Se unieron para poder ofrecerle más protección, más bienestar y más tranquilidad.</p>
            <a class="vermas" href="#contacto" itemprop="url">
                <div class="md-trigger">Contáctenos <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <span class="icon-right"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <figure class="bg-alianza"></figure>
        </div>
        <a href="javascript:scrollToContacto();">
            <div class="abajo"></div>
        </a>
    </div>
</div>