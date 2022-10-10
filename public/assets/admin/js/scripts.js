function alerta(mensagem){
    var alertas = document.createElement("div");
    var alerta = document.createElement("div");
    alertas.className = "alertas";
    alerta.className = "alerta";
    alerta.textContent = mensagem;
    var lista = $("body .alertas").length;
    if(lista > 0){
        $("body .alertas").append(alerta);
    }else{
        $("body").append(alertas);
        alertas.append(alerta);
    }

    setTimeout(function(){
        $(alerta).addClass("active");
    }, 0);
    setTimeout(function(){
        $(alerta).removeClass("active"); 
    }, 2800);
    setTimeout(function(){
        $(alerta).remove(); 
    }, 3000);
}