// JavaScript Document
function menuactive(){
    $('#menu-activo li').on('click', function(){
    $('#menu-activo li.activo').removeClass('activo');
    $(this).addClass('activo');
    console.log(this);
});
}
function scrollToTop() {
    $('html, body').animate({scrollTop: 0}, 'slow');
    scrollNavbar();
}
function scrollToMonitoreo() {
    menuactive();
    $(this).addClass('activo');
    $('html, body').animate({scrollTop: $("#bg-zero").offset().top}, 'slow');
    responsiveMobile('bg-zero');
    scrollNavbar();
}
function scrollToTelevideo() {
    menuactive();
    $('html, body').animate({scrollTop: $("#bg-two").offset().top}, 'slow');
    responsiveMobile('bg-two');
    scrollNavbar();
}
function scrollToRastreo() {
    menuactive();
    $('html, body').animate({scrollTop: $("#bg-three").offset().top}, 'slow');
    responsiveMobile('bg-three');
    scrollNavbar();
}
function scrollToContacto() {
    menuactive();
    $('html, body').animate({scrollTop: $("#contacto").offset().top}, 'slow');
    responsiveMobile('contacto');
    scrollNavbar();
}
function scrollToCasa() {
    $('html, body').animate({scrollTop: $("#casa").offset().top}, 'slow');
    responsiveMobile('casa');
    scrollNavbar();
}
function scrollToEmpresa() {
    $('html, body').animate({scrollTop: $("#empresa").offset().top}, 'slow');
    responsiveMobile('empresa');
    scrollNavbar();
}
function scrollToBeneficios() {
    $('html, body').animate({scrollTop: $("#beneficios").offset().top}, 'slow');
    responsiveMobile('beneficios');
    scrollNavbar();
}
function scrollToContactoMonitoreo() {
    scrollToContacto();
    scrollNavbar();
}
function scrollToApartamento() {
    $('html, body').animate({scrollTop: $("#bg-apartamento").offset().top}, 'slow');
    responsiveMobile('bg-apartamento');
    scrollNavbar();
}
function scrollToFabrica() {
    $('html, body').animate({scrollTop: $("#bg-fabrica").offset().top}, 'slow');
    responsiveMobile('bg-fabrica');
    scrollNavbar();
}
function scrollToTelevideo3() {
    $('html, body').animate({scrollTop: $("#televide3").offset().top}, 'slow');
    responsiveMobile('televide3');
    scrollNavbar();
}
function scrollToTelevideo4() {
    $('html, body').animate({scrollTop: $("#televide4").offset().top}, 'slow');
    responsiveMobile('televide4');
    scrollNavbar();
}
function scrollToTelevideo5() {
    $('html, body').animate({scrollTop: $("#televide5").offset().top}, 'slow');
    responsiveMobile('televide5');
    scrollNavbar();
}
function scrollToRastreo1() {
    $('html, body').animate({scrollTop: $("#rastreo1").offset().top}, 'slow');
    responsiveMobile('rastreo1');
    scrollNavbar();
}
function scrollToRastreo2() {
    $('html, body').animate({scrollTop: $("#rastreo2").offset().top}, 'slow');
    responsiveMobile('rastreo2');
    scrollNavbar();
}
function scrollToRastreo3() {
    $('html, body').animate({scrollTop: $("#rastreo3").offset().top}, 'slow');
    responsiveMobile('rastreo3');
    scrollNavbar();
}
function scrollToRastreo4(){
    $('html, body').animate({scrollTop: $("#rastreo4").offset().top}, 'slow');º
    responsiveMobile('rastreo4');
    scrollNavbar();
}
function scrollToferta1(){
    $('html, body').animate({scrollTop: $("#oferta1").offset().top}, 'slow');
    responsiveMobile('oferta1');
    scrollNavbar();
}
function scrollToferta2(){
    $('html, body').animate({scrollTop: $("#oferta2").offset().top}, 'slow');
    responsiveMobile('oferta2');
    scrollNavbar();
}
function scrollToferta3(){
    $('html, body').animate({scrollTop: $("#oferta3").offset().top}, 'slow');
    responsiveMobile('oferta3 ');
    scrollNavbar();
}
function scrollToCali1(){
    $('html, body').animate({scrollTop: $("#Cali1").offset().top}, 'slow');
    responsiveMobile('Cali1 ');
    scrollNavbar();
}
function scrollToCali2(){
    $('html, body').animate({scrollTop: $("#Cali2").offset().top}, 'slow');
    responsiveMobile('Cali2 ');
    scrollNavbar();
}
function scrollToCali3(){
    $('html, body').animate({scrollTop: $("#Cali3").offset().top}, 'slow');
    responsiveMobile('Cali3 ');
    scrollNavbar();
}
function scrollToMedellin1(){
    $('html, body').animate({scrollTop: $("#Medellin1").offset().top}, 'slow');
    responsiveMobile('Medellin1 ');
    scrollNavbar();
}
function scrollToMedellin2(){
    $('html, body').animate({scrollTop: $("#Medellin2").offset().top}, 'slow');
    responsiveMobile('Medellin2 ');
    scrollNavbar();
}
function scrollToMedellin3(){
    $('html, body').animate({scrollTop: $("#Medellin3").offset().top}, 'slow');
    responsiveMobile('Medellin3 ');
    scrollNavbar();
}
function scrollToBucaramanga1(){
    $('html, body').animate({scrollTop: $("#Bucaramanga1").offset().top}, 'slow');
    responsiveMobile('Bucaramanga1 ');
    scrollNavbar();
}
function scrollToBucaramanga2(){
    $('html, body').animate({scrollTop: $("#Bucaramanga2").offset().top}, 'slow');
    responsiveMobile('Bucaramanga2 ');
    scrollNavbar();
}
function scrollToBucaramanga3(){
    $('html, body').animate({scrollTop: $("#Bucaramanga3").offset().top}, 'slow');
    responsiveMobile('Bucaramanga3 ');
    scrollNavbar();
}
function scrollToBarranquilla1(){
    $('html, body').animate({scrollTop: $("#Barranquilla1").offset().top}, 'slow');
    responsiveMobile('Barranquilla1 ');
    scrollNavbar();
}
function scrollToBarranquilla2(){
    $('html, body').animate({scrollTop: $("#Barranquilla2").offset().top}, 'slow');
    responsiveMobile('Barranquilla2 ');
    scrollNavbar();
}
function scrollToBarranquilla3(){
    $('html, body').animate({scrollTop: $("#Barranquilla3").offset().top}, 'slow');
    responsiveMobile('Barranquilla3 ');
    scrollNavbar();
}
function scrollToVillavicencio1(){
    $('html, body').animate({scrollTop: $("#Villavicencio1").offset().top}, 'slow');
    responsiveMobile('Villavicencio1');
    scrollNavbar();
}
function scrollToVillavicencio2(){
    $('html, body').animate({scrollTop: $("#Villavicencio2").offset().top}, 'slow');
    responsiveMobile('Villavicencio2');
    scrollNavbar();
}
function scrollToVillavicencio3(){
    $('html, body').animate({scrollTop: $("#Villavicencio3").offset().top}, 'slow');
    responsiveMobile('Villavicencio3');
    scrollNavbar();
}
function scrollToGirardot1(){
    $('html, body').animate({scrollTop: $("#Girardot1").offset().top}, 'slow');
    responsiveMobile('Girardot1');
    scrollNavbar();
}
function scrollToGirardot2(){
    $('html, body').animate({scrollTop: $("#Girardot2").offset().top}, 'slow');
    responsiveMobile('Girardot2');
    scrollNavbar();
}
function scrollToGirardot3(){
    $('html, body').animate({scrollTop: $("#Girardot3").offset().top}, 'slow');
    responsiveMobile('Girardot3');
    scrollNavbar();
}
function scrollToValledupar1(){
    $('html, body').animate({scrollTop: $("#Valledupar1").offset().top}, 'slow');
    responsiveMobile('Valledupar1 ');
    scrollNavbar();
}
function scrollToValledupar2(){
    $('html, body').animate({scrollTop: $("#Valledupar2").offset().top}, 'slow');
    responsiveMobile('Valledupar2 ');
    scrollNavbar();
}
function scrollToValledupar3(){
    $('html, body').animate({scrollTop: $("#Valledupar3").offset().top}, 'slow');
    responsiveMobile('Valledupar3 ');
    scrollNavbar();
}
function scrollToTunja1(){
    $('html, body').animate({scrollTop: $("#Tunja1").offset().top}, 'slow');
    responsiveMobile('Tunja1');
    scrollNavbar();
}
function scrollToTunja2(){
    $('html, body').animate({scrollTop: $("#Tunja2").offset().top}, 'slow');
    responsiveMobile('Tunja2');
    scrollNavbar();
}
function scrollToTunja3(){
    $('html, body').animate({scrollTop: $("#Tunja3").offset().top}, 'slow');
    responsiveMobile('Tunja3');
    scrollNavbar();
}
function scrollToEquipos1(){
    $('html, body').animate({scrollTop: $("#Equipos1").offset().top}, 'slow');
    responsiveMobile('Equipos1');
    scrollNavbar();
}
function scrollToEquipos2(){
    $('html, body').animate({scrollTop: $("#Equipos2").offset().top}, 'slow');
    responsiveMobile('Equipos2');
    scrollNavbar();
}
function scrollToEquipos3(){
    $('html, body').animate({scrollTop: $("#Equipos3").offset().top}, 'slow');
    responsiveMobile('Equipos3');
    scrollNavbar();
}
function scrollToEquipos4(){
    $('html, body').animate({scrollTop: $("#Equipos4").offset().top}, 'slow');
    responsiveMobile('Equipos4');
    scrollNavbar();
}
function scrollToEquipos5(){
    $('html, body').animate({scrollTop: $("#Equipos5").offset().top}, 'slow');
    responsiveMobile('Equipos5');
    scrollNavbar();
}
function scrollToEquipos6(){
    $('html, body').animate({scrollTop: $("#Equipos6").offset().top}, 'slow');
    responsiveMobile('Equipos6');
    scrollNavbar();
}
function scrollToEquipos7(){
    $('html, body').animate({scrollTop: $("#Equipos7").offset().top}, 'slow');
    responsiveMobile('Equipos7');
    scrollNavbar();
}
function scrollToEquipos8(){
    $('html, body').animate({scrollTop: $("#Equipos8").offset().top}, 'slow');
    responsiveMobile('Equipos8');
    scrollNavbar();
}
function scrollToEquipos9(){
    $('html, body').animate({scrollTop: $("#Equipos9").offset().top}, 'slow');
    responsiveMobile('Equipos9');
    scrollNavbar();
}
function scrollToEquipos10(){
    $('html, body').animate({scrollTop: $("#Equipos10").offset().top}, 'slow');
    responsiveMobile('Equipos10');
    scrollNavbar();
}
function scrollToEquipos11(){
    $('html, body').animate({scrollTop: $("#Equipos11").offset().top}, 'slow');
    responsiveMobile('Equipos11');
    scrollNavbar();
}
function scrollToEquipos12(){
    $('html, body').animate({scrollTop: $("#Equipos12").offset().top}, 'slow');
    responsiveMobile('Equipos12');
    scrollNavbar();
}
function scrollToAlianza1(){
    $('html, body').animate({scrollTop: $("#Alianza1").offset().top}, 'slow');
    responsiveMobile('Alianza1 ');
    scrollNavbar();
}
function scrollToSitemap(){
    $('html, body').animate({scrollTop: $("#sitemap").offset().top}, 'slow');
    responsiveMobile('sitemap ');
    scrollNavbar();
}
function scrollToGracias(){
    $('html, body').animate({scrollTop: $("#gracias").offset().top}, 'slow');
    responsiveMobile('gracias');
    scrollNavbar();
}
function responsiveMobile(div){
    if($(window).width() > 300 && $(window).width() < 767)
    {
        $("#"+div).css("margin-top", "170px");
    }
}
function scrollNavbar()
{
    $("#navigatoricon").html('<span class="fa fa-list" style="color:#fff;"></span>');
    $('.collapse').collapse('hide');
}