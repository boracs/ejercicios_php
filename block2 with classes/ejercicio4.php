<?php

$frase = "Hola,buenos,dias,soy,Borja";

$arrraydefrase = explode(",",$frase);

echo $arrraydefrase[0];
echo"<br>";
echo $arrraydefrase[1];
echo"<br>";
echo $arrraydefrase[2];
echo"<br>";

echo "<br><br> número elementos en array:".count($arrraydefrase);

?>