<?php
require "MoviesManager.php";

if(isset($_GET['usuario'] ) ){
    $usuario = $_GET['usuario'];
    setcookie('persona',$usuario,time()+24*3600);
}else{
    $usuario = $_COOKIE['persona'];
}
 

if(isset($_GET['movie']) && ($_GET['isan']) && ($_GET['year']) && ($_GET['puntuacion']) &&  ($_GET['hiddeninput']=="")){
    $pelicula = Movie::create_Movie_With_Atribute($_GET['movie'],$_GET['isan'],$_GET['year'],$_GET['puntuacion']);
    $pelicula->showMovie();
}else if(isset($_GET['movie']) && ($_GET['isan']) && ($_GET['year']) && ($_GET['puntuacion']) && ($_GET['hiddeninput'])){

}
  





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 200px;
        }
    </style>
</head>

<body>
    <header>
    <h1>LISTA DE PELICULAS DE <?php echo $usuario ?></h1>

        <h2> <?php ; ?></h2>

    <hr>    
    </header>
    <form action="Main.php">
        <label for="movie">Movie</label>
        <input type="text" name="movie">
        <label for="movie">ISAN</label>
        <input type="text" name="isan">
        <label for="movie">Year</label>
        <input type="text" name="year">
        <label for="punctuation">Punctuation</label>
        <select id="pais" name="puntuacion">
            <option value="1"> One</option>
            <option value="2">two</option>
            <option value="3">trhee</option>
            <option value="4">four</option>
            <option value="5">five</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
        <input type="hidden" name="hiddeniput" value=" <?php echo $datospeliculas; ?>">
    </form>
</body>
</html>