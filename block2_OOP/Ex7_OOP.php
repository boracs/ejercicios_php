<?php
class Power{
    private $base;
    private $exponent;

    public function __construct($base, $exponent = 2){
        $this->base = $base;
        $this->exponent = $exponent;
    }

    public function getPower(){
        return pow($this->base, $this->exponent);
    }
}

$p = new Power(3,3);
echo $p->getPower();