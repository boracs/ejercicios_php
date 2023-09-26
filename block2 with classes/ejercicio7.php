<?php

/*Write a function to calculate powers. 
It receives as arguments the base and the exponent, 
which is optional and defaults to 2 (square).*/

class Power {
    private $base;
    private $exponent;

    public function __construct($b,$e = 2){
        $this->base = $b;
        $this->exponent = $e;
    }

    public function elevapotencia(){
        $potencia =1;
        $cont =0;
        while($cont<$this->exponent){
            $potencia = $potencia* $this->base;
            $cont++;
        }
        echo"$potencia";
    }
}


$p1 = new Power(5);
$p1->elevapotencia();


?>