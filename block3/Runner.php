<?php
class Runner {
    private $name;
    private $code ;
    private $tiempos;

    public function __construct($n , $c ){
        $this->name = $n;
        $this->code = $c;
        $this->tiempos = [];
    }

// getters and setter 
public function getname(){
    return $this->name;
}
public function getcode(){
    return $this->code;
}
public function gettiempos(){
    return $this->tiempos;
}
public function setname($n){
    $this->name = $n;
}
public function setcode($c){
    $this->code = $c;
}
public function settiempos($t){
    $this->tiempos = $t;
}

//m ethods
public function addRace($t){
    try{

        if(sizeof($this->tiempos)<5){
            array_push($this->tiempos,$t);
        }elseif(sizeof($this->tiempos>=5) ){
            throw new Exception ("el corredor ya corrio 5 carreras");
        }else if($t<5){
            throw new Exception ("la carrera es demasiado corta");
        }

    }catch(Exception $e){
        echo"nos  epueden añadir mas carreras";
        return $e->getMessage();
        }
}






}

?>