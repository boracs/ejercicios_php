<pre>
<?php
require "Competition.php";



$r1 = new Runner("borja", "24f4g4");
$r2 = new Runner("rigoberto", "f43tg56");
$r3 = new Runner("iñako", "f43tgg6");

$competicion1 = new Competition();

$r1->addRace(12);
$r1->addRace(3);
$r2->addRace(11);
$r3->addRace(4);

$competicion1->addRunner($r1);
$competicion1->addRunner($r2);
$competicion1->addRunner($r3);
$competicion1->mostrarCorredor();


?>

</pre>