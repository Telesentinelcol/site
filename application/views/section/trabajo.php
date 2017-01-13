<?php $ruta = isset($rut) ? $rut : ''; ?>
<div class="content">
    <figure class="logotipo"></figure>
    <div class="row section" id="quejas">
        <h1>Trabaje con nosotros</h1>
        <p>Si desea participar en nuestros procesos de convocatorias laborales por favor diligencie estos datos, en caso de tener el perfil requerido por Telesentinel, personal del departamento de Recursos Humanos se comunicará con usted.</p>
        <form class="pqr">
            <label>Nombre y Apellido</label>
            <label>Celular</label>
            <label>Teléfono fijo</label>
            
            <input type="text" value="" placeholder="Nombre y apellido" required=""/>
            <input type="tel" value="" placeholder="Celular" required=""/>
            <input type="tel" value="" placeholder="Telesentinel"/>
            
            <label>Dirección</label>
            <label>Correo electrónico</label>
            <label>Adjuntar archivo (Pdf o Word)</label>
 
            <input type="text" value="" placeholder="Dirección"/>
            <input type="tel" value="" placeholder="Correo electrónico"/>
            <input type="file" value="" placeholder="Adjuntar archivo"/>
            
            <textarea rows="8" placeholder="Escriba aquí"></textarea>
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
                <a>ksanches@telesentinel.com</a>
            </div>
        </div>
    </div>
</div>