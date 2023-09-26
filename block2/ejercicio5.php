<?php

$arrayMeses = array(
    "enero" => 31,
    "febrero" =>28,
    "marzo"=> 31,
    "abril"=> 30,
    "mayo"=>31, 
    "junio" =>30, 
    "julio" =>31,
    "agosto" =>31,
    "septiembre"=>30,
    "octubre"=>31,
    "noviembre" =>30, 
    "diciembre"=>31,
);





echo "<table border ='1px'>";


echo"<tr>";
foreach($arrayMeses as $item =>$value){
    echo"<td>$item</td>";
}
echo"</tr>";
echo"<tr>";
foreach($arrayMeses as $value){
    echo"<td>$value</td>";
}
echo"</tr>";
echo " </table>";




?>