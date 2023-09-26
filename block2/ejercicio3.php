<pre>


<?php


$arr = array();
for ($i=0; $i<20; $i++){
    $arr [$i]= rand(0,10);
}
sort($arr);


foreach($arr as  $value){

    if($value==$arr[0]){
        echo" <p style='color: blue; ' > $value  </p> </br>";
    }
    else if($value==$arr[19]){
        echo" <p style='color: green; ' > $value  </p> </br>";
    }
    else{
        echo" <p>$value </p></br>";
    }
}



?>

</pre>