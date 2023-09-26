<?php

$sales= 10000;
$porcentaje =0;


if($sales<10000){
    $porcentaje = $sales*0.05;
}else if($sales>=10000 || $sales<=20000){
    $porcentaje = $sales*00.8;
}else if($sales>20000 || $sales<=40000){
    $porcentaje = $sales*1;
}else{
    $porcentaje = $sales*013;
}
echo"la comision es". $sales+$porcentaje;



?>