$(document).ready(function(){
    $(document).on("click","#cmdEnviar",function(){
        var nombres = $("#nombres").val();
        var apellidos = $("#apellidos").val();
        var fechanac = $("#fechaNacimiento").val();
        var sueldo = $("#sueldo").val();
        var pais = $("#pais").val();
        console.log(nombres+" "+apellidos+" "+fechanac+" $"+sueldo+" "+pais);
    });
});