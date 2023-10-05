<?php

require "Runner.php";

class Competition {

    private $arrayasociativo;

    public function __construct() {
        $this->arrayasociativo = array();
    }
    public function addRunner($r){
        $this->arrayasociativo+=[$r->getcode() => $r];
    }

    public function mostrarCorredores(){
        print_r($this->arrayasociativo);
    }

    public function addRaceToRunner($idCorredor , $tiempo){
        $idrunner = $this->arrayasociativo[$idCorredor];
        try{
            $idrunner->addRace($tiempo);
        }catch(Exception $e){
            echo"add Race salio mal";
            return $e->getMessage();
        }
    }

    public function calculate_The_Avg(){
        $avg=0;
        $tiempototal=0;
        $contador =0;
        foreach($this->arrayasociativo as $key=>$value){
            $tiempototal += $value->gettiempos()[0];
            $contador++;
        }
        $avg = $tiempototal/$contador;
        //puedo hacer un size of del arrayasociativo y quitar el contador
        return $avg;
    }   

    public function RunnerQuiquestRace(){
        $codigo;
        $carreraMasRapida=100000;
        foreach($this->arrayasociativo as $key=>$value){
            foreach($value->gettiempos() as $clave=> $valor){
                if($valor<$carreraMasRapida ){
                    $carreraMasRapida = $valor;
                    $codigo = $value->getname();
                }
            }
        }
        return $codigo;
    }

    public function moreThan2WithMore15(){
        $array = array();
    
        foreach($this->arrayasociativo as $key=>$value){
            $cont =0;
            foreach($value->gettiempos() as $clave=>$valor){
                if($valor>15){
                   $cont++;
                }
            }
            if($cont>2){
                array_push($array, $value->getname());
            }
            return $array;
        }
     }

     public function namesFinishE(){
        $arrayResultados = array();

        foreach($this->arrayasociativo as $key=>$value){
             if ((substr($value->getname(), -1) == 'e')){
            $arrayResultados[] = $value;
            }
        }
        return  $arrayResultados;
     }





}
?>



