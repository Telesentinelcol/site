<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo"></figure>
    <div class="row section" id="quejas">
        <h1>Servicio al cliente</h1>
        <p>Hemos creado este espacio para tener una comunicación directa con usted, por favor diligencie la mayor catidad de información para facilitar el proceso de servicio con usted. Gracias.</p>
        
        <form class="pqr" action="javascript:void(0)" method="POST" id="formpqr" name="formpqr" onsubmit="send_email('nombreformulario')">
            <label>Nombre y Apellido</label>
            <label>Celular</label>
            <label>Teléfono fijo</label>
            
            <input name="nombre" type="text" value="" placeholder="Nombre y apellido" required=""/>
            <input name="celular" type="tel" value="" placeholder="Celular" required=""/>
            <input name="telefono_fijo" type="tel" value="" placeholder="Telefono fijo"/>
            
            <label>Dirección</label>
            <label>Correo electrónico</label>
            <label>Número de contrato</label>
            
            <input name="direccion" type="text" value="" placeholder="Dirección"/>
            <input name="email" type="tel" value="" placeholder="Correo electrónico"/>
            <input name="ncontrato" type="text" value="" placeholder="Número Contrato"/>
            
            <textarea name="observaciones"rows="8" placeholder="Escriba aquí"></textarea>
            <input type="submit" value="Enviar"/>
            
        </form>
        
        <div class="row redes-sociales">
            <div class="col-md-6 col-lg-6">
                <h2>Sigenos en:</h2>
                <img src="<?= $ruta ?>img/icon-facebook-pqr.png" alt="Facebook" title="Facebook"/>
                <img src="<?= $ruta ?>img/icon-instagram-pqr.png" alt="Instagram" title="Instagram"/>
                <img src="<?= $ruta ?>img/icon-youtube-pqr.png" alt="Youtube" title="Youtube"/>
            </div>
            <div class="col-md-6 col-lg-6">
                <h2>Correo electrónico</h2>
                <a>servicioalcliente@telesentinel.com</a>
            </div>
        </div>
    </div>
</div>