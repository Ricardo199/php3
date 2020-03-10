<?php 
if(isset($_REQUEST['cmdEnviar'])){
    $nombres= $_REQUEST['nombres'];
    $apellidos= $_REQUEST['apellidos'];
    $fechaNacimiento= $_REQUEST['fechaNacimiento'];
    $sueldo= $_REQUEST['sueldo'];
    $iss=$sueldo*0.03;
    $afp=$sueldo*0.07;
    if($sueldo>1000){
        $renta=$sueldo*0.1;
    }else{
        $renta=$sueldo*0.07;
    }
    $pais= $_REQUEST['pais'];
    $preferencias= $_REQUEST['preferencias'];
    $direccion= $_REQUEST['direccion'];
    echo "Informacion recolectada<br>";
    echo "Nombre: ".$nombres.
    "<br>Apellidos: ".$apellidos.
    "<br> Fecha de nacimiento: ".$fechaNacimiento.
    "<br>Sueldo: $".($sueldo-$iss-$afp-$renta).
    "<br>Preferencias: <br>";
    foreach($preferencias as $pre){
        echo "<ul><li>".$pre."</li></ul>";
    }
    echo "<br>Dirección: ".$direccion."<br>";
    echo date("h:i:sa");
}
?>