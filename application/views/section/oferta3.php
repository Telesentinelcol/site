<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo"></figure>
    <div class="row section" id="all-ofert">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="titulo-all-ofert">Todas nuestras <br><small>ofertas</small></h1>
            <div id="coverflow">
                <ul class="flip-items">
                    <li>
                        <figure class="oferta-a">
                            <a href="javascript:scrollToScreen(3)" class="conocer-mas"></a>
                        </figure>
                    </li>
                    <li>
                        <figure class="oferta-b">
                            <a href="javascript:scrollToScreen(1)" class="conocer-mas"></a>
                        </figure>
                    </li>
                    <li>
                        <figure class="oferta-c">
                            <a href="javascript:scrollToScreen(4)" class="conocer-mas"></a>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
        <a href="javascript:scrollToContacto();">
            <div class="abajo"></div>
        </a>
    </div>
</div>
<script>
    var coverflow = $("#coverflow").flipster();
</script>