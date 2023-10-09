<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
    <label for="">nombre</label>
    <input type="text" name ="nombre">
</form>

<?php
    if(!isset($_COOKIE["visitas"])){
    setcookie("visitas",1,time()+5);
    }else{
        $visitas = (int) $_COOKIE["visitas"];
        $visitas++;
        setcookie("visitas",$visitas,time()+5);
    }
    echo $_COOKIE["visitas"];
?>

    
</body>
</html>