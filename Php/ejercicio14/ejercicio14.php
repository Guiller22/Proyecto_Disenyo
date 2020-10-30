<?php
$numero=$_REQUEST['num'];
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$array[]="division exacta";
$array[]="uno";
$array[]="dos";
$array[]="tres";
$array[]="cuatro";
$array[]="cinco";
$array[]="seis";
$array[]="siete";
$array[]="ocho";
$array[]="nueve";
$array[]="diez";
$array[]="once";
for ($i = 0; $i<12; $i++){
    if(($numero %12) ==$i){
        echo "El resto de la division es: ",$array[$i];
    }
}
