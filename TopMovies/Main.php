<?php
if(isset($_GET['usuario'] ) ){
    $usuario = $_GET['usuario'];
    setcookie('persona',$usuario,time()+24*3600);
}else{
    $usuario = $_COOKIE['persona'];
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
    <hr>    
    </header>
  
    <form action="Main.php">
        <label for="movie">Movie</label>
        <input type="text" name="movie">
        <label for="movie">ISAN</label>
        <input type="text" name="movie">
        <label for="movie">Year</label>
        <input type="text" name="movie">
        <label for="punctuation">Punctuation</label>
        <select id="pais" name="pais">
            <option value="usa"> One</option>
            <option value="canada">two</option>
            <option value="mexico">trhee</option>
            <option value="espana">four</option>
            <option value="argentina">five</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
