<?php

class Movie{
    private $name;
    private $isan;
    private $year;
    private $punctuation;


private function __construct($name, $isan, $year, $punctuation){
    $this->name = $name;
    $this->year = $year;
    $this->isan = $isan;
    $this->punctuation = $punctuation;
}

public static function create_Movie_With_Atribute($name, $isan, $year, $punctuation){
    return new Movie($name, $isan, $year, $punctuation);
}


public static function create_Movie_With_String($string){
    $moviesArray = explode(",",$string);
   print_r($moviesArray);
   $name =$moviesArray[0];
   $isan =$moviesArray[1];
   $year =$moviesArray[2];
   $punctuation =$moviesArray[3];

    return new Movie($name, $isan, $year, $punctuation);
}

public function showMovie(){
    echo "$this->name , $this->isan  ,  $this->year ,  $this->punctuation ";
}





}



?>