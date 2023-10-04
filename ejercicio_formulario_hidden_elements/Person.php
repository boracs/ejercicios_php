<?php

class Person{
    private $name;
    private $surname;

    public function  __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function toString(){
        return $this->name.$this->surname;
    }
}


