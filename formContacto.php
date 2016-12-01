<?php
$origen = 'busqueda';
$dispositivo = 'desktop';

if (isset($_POST['origen'])) :
    $origen = $_POST['origen'];
endif;

if (isset($_POST['dispositivo'])) :
    $dispositivo = $_POST['dispositivo'];
endif;
?>
<h1>Contacto</h1>
<form action="javascript:void(0)" onsubmit="enviarform();" name="fo3" method="POST" id="fo3method" name="fo3method">
    <input type="hidden" name="origen" value="<?= $origen ?>" >
    <input type="hidden" name="pais" value="CO" >
    <input type="hidden" name="dispositivo" value="<?= $dispositivo ?>" >
    <input type="text" required=""  placeholder="Nombre y apellido" name="nombre">
    <input type="email" required="" placeholder="info@email.com" pattern="^[a-zA-Z0-9.!#$%&amp;'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email">
    <input type="tel" value="" pattern="[0-9]{5,12}" placeholder="Teléfono" name="telefono">
    <input type="hidden" id="confirmacion" name="confirmacion" value="0"/>
    <select name="ciudad">
        <option value="">Seleccione Ciudad</option>
        <option value="8001">Barranquilla</option>
        <option value="11001">Bogotá</option>
        <option value="68001">Bucaramanga</option>
        <option value="76001">Cali</option>
        <option value="25175">Chía</option>
        <option value="25307">Girardot</option>
        <option value="5001">Medellín</option>
        <option value="15001">Tunja</option>
        <option value="20001">Valledupar</option>
        <option value="50001">Villavicencio</option>
        <option value="11001">Otros</option>
    </select>
    <select name="servicio">
        <option value="Monitoreo">Seleccione Servicio</option>
        <option value="Monitoreo">Monitoreo</option>
        <option value="Televideo">Televideo</option>
        <option value="Rastreo">Rastreo</option>
        <option value="Monitoreo">Otro</option>
    </select>
    <div class="g-recaptcha" data-sitekey="6LfmDyITAAAAAFCJDxlS1eHBCE5MvDYQlK_elq15"></div>
    <div class="terminos">Acepto los <a href="files/terminos.pdf" target="_blank">términos</a> y condiciones<input type="checkbox" id="confcheck" onclick="validarCheck()"/></div>
    <input type="submit" value="Enviar" id="enviar" name="enviar">
</form>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>