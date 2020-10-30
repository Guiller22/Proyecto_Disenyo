<?php

include 'head.php';
$nombres=['julia' , 'pepe' , 'matias' , 'roma'];
//$nombres=array(); si lo quiero vacío
echo'<pre>';
var_dump($nombres);
echo'</pre>';
//print_r($nombres);
$nombres[]='pepe';
//existe una funcion count()
echo "<br>El num total es: " . count($nombres);

foreach($nombres as $valor){
    echo '<br>'.$valor . '<br>';
}
//defino un nuevo array asociativo
$notas=['Julia' =>4 ,'pepa' =>8 ,'tere' =>6, 'sae' =>9];
$contador_aprobados=0;
foreach($notas as $clave=>$valor){
    if($valor>=5)
    $contador_aprobados++;
}
var_dump($notas);
$acumulador_notas=0;
foreach($notas as $clave=>$valor){
    if($valor>=5)
    $contador_aprobados++;
    $acumulador_notas+=
}
include 'pie.php';

