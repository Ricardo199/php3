$(document).ready(function(){
    $(document).on("click","#cmdEnviar",function(){
        var datos = JSON.stringify($("#frmEmpleado :input").serializeArray());
        //console.log(datos);
        $.ajax({
            type: "post",
            dataType: "JSON",
            url:"php/recepcion.php",
            data: {datos:datos}
        }).done(
            function(data) {
               $("#tot").text(data.sueldo);
        }).fail(
            function(data){

        });
    });
});