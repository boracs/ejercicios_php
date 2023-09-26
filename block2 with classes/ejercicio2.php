<?php



function creatabla($n1, $n2){
    $concat = "";
    $concat.= "<table border='1'>";
    for($i=0; $i<$n1 ; $i++){
        $concat.="<tr>";
        for($j=0; $j<$n2;$j++){
            $concat.="<td>Hola mundo</td>";
        }
        $concat.="</tr>";
    }
    $concat.= "</table>";
    echo "$concat";

    }


    creatabla(3,4);








?>