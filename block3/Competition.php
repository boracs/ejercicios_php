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

    public function mostrarCorredor(){

        print_r($this->arrayasociativo);
        
    }


}

?>



