<?php 
    $array[]=1000;
    $array[]="Esto";
    $array[]="20000";
    $array[]="Algo mas";

    for($i=0;$i<sizeof($array);$i++){
        echo "<ul><li>".$array[$i]."</li></ul>";
    }
    echo "<br>";

    $informacion= array(
        "Nombres"=>"Ricardo Antonio",
        "Apellidos"=>"Burgos Avelar",
        "Dirección"=>"Mi casa",
        "Fecha de Registro"=>date("Y-m-d h:i:sa"),
        "Profesion"=>"Estudiante"
    );
    foreach($informacion as $info){
        echo "<ul><li>".$info."</li></ul>";
    }
    echo "<br>";

    $quadarray= array(
        "Arreglo 1"=>$array,
        "Arreglo 2"=>$informacion
    );
    foreach($quadarray as $val){
        foreach($val as $key){
            echo "<ul><li>".$key."</li></ul>";
        }
    }
?>