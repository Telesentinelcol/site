loadCSS = function (href) {

    var cssLink = $("<link>");
    $("head").append(cssLink); //IE hack: append before setting href

    cssLink.attr({
        rel: "stylesheet",
        type: "text/css",
        href: href
    });
};
function send_email(nombreformulario){
    var formulario = $("#" + nombreformulario).serialize();
    jQuery.ajax({
        'type': 'POST',
        'url': '/telesentinel/recepcion.php',
        'data': formulario,
        'beforeSend':function(){
            $("#loading").modal('show');
        },
        'success':
                function (respuesta)
                {
                    if(respuesta=='OK'){
                        alert('exito');
                    }
                    else{
                        alert(respuesta);
                    }
                    $("#loading").modal('hide');
                },
        'error': function (m, e, a) {
            swal("¡Error!", "Consulte al Administrador del Sistema...", 'error');
        },
        'cache': false
    });

}