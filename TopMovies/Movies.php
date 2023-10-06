<?php


class Movie{
    private $name;
    private $ISAN;
    private $year;
    private $punctuation;


public function __construct($name, $isan, $year, $punctuation){
    $this->name = $name;
    $this->year = $year;
    $this->ISAN = $isan;
    $this->punctuation = $punctuation;
}



}






?>