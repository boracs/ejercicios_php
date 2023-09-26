<pre>
<?php
/*
Write the necessary code to create two arrays: 
the first 10 natural numbers (starting with 0) are 
stored in the first array. In the second, we store 
the value of the factorial of the number included in
 the same position of the first array.
*/



class_





$arr1 = array();
$arr2= array();


for($i =0; $i<=10; $i++){
    $arr1 [$i]= $i;
}

echo "<br>";
foreach($arr1 as $value){
    $factorial =1;
    for($i=1; $i<=$value; $i++){
        $factorial = $factorial* $i;
    }
    echo "<br>";
array_push($arr2,$factorial);
}
var_dump($arr1);
echo "<br>";
echo "<br>";
var_dump($arr2);

?>
</pre>