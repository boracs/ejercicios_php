<?php

class PersonManager{
    private $names; 

    public function __construct($nombres=""){
        $this->names = $nombres;
    }

    public function addName($persona){
        $this->names = $this->names. $persona->toString();
    }

    public function toString(){
        return $this->names;

    }
}

