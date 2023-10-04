
<pre>
<?php

$arr = array(
    "enero"=>array(),
    "febrero"=>array(),
    "marzo"=>array(),
    "abril"=>array(),
    "mayo"=>array(),
    "junio"=>array(),
    "julio"=>array(),
    "agosto"=>array(),
    "septiembre"=>array(),
    "octubre"=>array(),
    "noviembre"=>array(),
    "diciembre"=>array()
);

//var_dump($arr);


function addNameToAMonth(&$arr, $nombre , $mes){
    foreach($arr as $key=>$value){
        if($key == $mes){
            $arr[$key][] = $nombre;
        }
    }
}


addNameToAMonth($arr, "sara","mayo");
addNameToAMonth($arr, "borja","noviembre");
addNameToAMonth($arr, "imanol","mayo");

var_dump($arr);

?>

</pre>