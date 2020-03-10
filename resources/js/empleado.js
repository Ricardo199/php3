$(document).ready(function(){
    $(document).on("click","#cmdEnviar",function(){
        var datos = JSON.stringify($("#frmEmpleado :input").serializeArray());
        //console.log(datos);
         var vacios=validar();
         if(vacios==0){
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
         }else{
             alert("no deje espacios requeridos");
         }        
    });
});
function validar(){
    var cont=0;
    $(".requerido").each(function(){
        var x =$(this).val();
        if(x==""){
            cont++;
            $(this).focus();
            die();            
        }
        return cont;
    });
}

function die(msg){
    alert("no deje espacios requeridos");
    throw msg;
}