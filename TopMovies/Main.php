<?php
require "MoviesManager.php";
$formErrors = array();



if(isset($_GET['usuario'] ) )
{
    $usuario = $_GET['usuario'];
    setcookie('persona',$usuario,time()+24*3600);
}else
{
    $usuario = $_COOKIE['persona'];
}

 
if(isset($_GET['movie']) && ($_GET['isan']) && ($_GET['year']) && ($_GET['puntuacion']) &&  empty($_GET['hiddeninput']))
{
    $ManagerPeliculas = new MoviesManager();
    $pelicula = Movie::create_Movie_With_Atribute($_GET['movie'],$_GET['isan'],$_GET['year'],$_GET['puntuacion']);
    $ManagerPeliculas->añadirPelicula($pelicula);
    $ManagerPeliculas->showPeliculas();
}


if(isset($_GET['movie']) && ($_GET['isan']) && ($_GET['year']) && ($_GET['puntuacion']) && (!empty($_GET['hiddeninput'])))
{
    $ManagerPeliculas = new MoviesManager();
    $inputvalue = $_GET['hiddeninput'];
    $arrayPeliculas = explode("|",$inputvalue);

    
    //echo" array despues del primer explode " ;
    //print_r($arrayPeliculas);
    array_pop($arrayPeliculas);
    //echo" array despues del primer explode mas el pop " ;
    //print_r($arrayPeliculas);
    
    foreach($arrayPeliculas as $movie){
       $pelicula = Movie::create_Movie_With_String($movie);
       $ManagerPeliculas->añadirPelicula($pelicula);
    }
    
    $pelicula = Movie::create_Movie_With_Atribute($_GET['movie'],$_GET['isan'],$_GET['year'],$_GET['puntuacion']);
    $ManagerPeliculas->añadirPelicula($pelicula);
}
if ( (isset($_GET['movie']) && ($_GET['isan'])) &&  (empty($_GET['isan'])) && (empty($_GET['isan']))){
    $formErrors["movie"] = "No has introducido ninguna película";
    $formErrors["isan"] = "No has introducido ningún código ISAN";
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    </style>
</head>
<body>
    <header>
        </header>
    <div class="container m-5">
        <h1>LISTA DE PELICULAS DE <?php echo $usuario ?></h1>
        <hr/>    
        <p>
            <?php if (isset($ManagerPeliculas)) $ManagerPeliculas->showPeliculas();?>
</p>
        <form  action="Main.php">
                <div class="m-5 d-flex flex-column w-25">
                    <label class=" col-form-label" for="movie">Movie</label>
                    <input  type="text" name="movie">
                             <?php if (isset($formErrors["movie"])): //si en el aray formErrors la key movie tiene algun error establecido que muestre el div ?>  
                             <div class="alert alert-danger"><?php echo $formErrors["movie"] ?></div> 
                             <?php endif; //es un if abreviado?>

                    <label class=" col-form-label" for="movie">ISAN</label>
                    <input type="text" name="isan">
                            <?php if (isset($formErrors["isan"])){//si en el aray formErrors  la key isan tiene algun error establecido que muestre el div?>
                            <div class="alert alert-danger"><?php echo $formErrors["isan"]?></div>
                            <?php } ?>
                    <label class="col-form-label" for="movie">Year</label>
                    <input type="text" name="year">
                    <label for="punctuation">Punctuation</label>
                    <select  class="col-form-label" id="puntuacion" name="puntuacion">
                        <option value="1"> One</option>
                        <option value="2">two</option>
                        <option value="3">trhee</option>
                        <option value="4">four</option>
                        <option value="5">five</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Enviar"class="btn btn-success" >
                    <input type="hidden" name="hiddeninput"  value="<?php if (isset($ManagerPeliculas)) $ManagerPeliculas->showPeliculas();?>">
                </div>
        </form>
    </div>
</body>
</html>