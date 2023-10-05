<pre>
<?php
require "Competition.php";



$r1 = new Runner("borjae", "24f4g4");
$r2 = new Runner("rigobertoe", "f43tg56");
$r3 = new Runner("iñaki", "f43tgg6");

$competicion1 = new Competition();




try{
$r3->addRace(7);
$r1->addRace(16);
$r1->addRace(45);
$r1->addRace(26);
$r1->addRace(7);
$r1->addRace(9);
$r1->addRace(78);
$r2->addRace(11);
$r3->addRace(4);

}catch(Exception $e){
    echo "error:" . $e->getMessage();
}





$competicion1->addRunner($r1);
$competicion1->addRunner($r2);
$competicion1->addRunner($r3);
$competicion1->mostrarCorredores();

$competicion1->addRaceToRunner("24f4g4",30);
$competicion1->addRaceToRunner("f43tg56",50);

$competicion1->mostrarCorredores();

echo "La media es ".$competicion1->calculate_The_Avg();
echo "<br>";
echo "La carrera mas rapida es " . $competicion1->RunnerQuiquestRace();

$array15 = $competicion1->moreThan2WithMore15();
echo"<br> correcodees con + de 2 carreras + largas de 15 segundo s son";
print_r($array15);

$arrConNombresAcabadosEnE = $competicion1->namesFinishE();
echo"corredores con nombres acabados en e";
print_r($arrConNombresAcabadosEnE);
?>

</pre>