<?php 
   $datos = $_REQUEST['datos'];
   $info = json_decode($datos);
   $nombre = $info[0]->value;
   $apellido = $info[1]->value;
   $fecha = $info[2]->value;
   $sueldo = $info[3]->value;
   $pais = $info[4]->value;
   $inter1 = $info[5]->value;
   $inter2 = $info[6]->value;
   $inter3 = $info[7]->value;
   $dir = $info[8]->value;
   $data = array("nombre"=>$nombre,
   "apellido"=>$apellido,
   "fecha"=>$fecha,
   "sueldo"=>$sueldo*1.1,
   "pais"=>$pais,
   "interes"=>array($inter1,$inter2,$inter3),
   "direccion"=>$dir);
   echo json_encode($data);
   die();
?>