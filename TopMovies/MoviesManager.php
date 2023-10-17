<?php
     require "Movie.php";
     class MoviesManager{
        private  $movies;

        

      public function __construct()
      {
         $this->movies = array();
      }


      public function añadirPelicula($peli)
      {
         array_push($this->movies, $peli);
      }


      public function showPeliculas()
      {
         foreach($this->movies as $value){
            
             $value->showMovie();
         }
      }



     }
?>