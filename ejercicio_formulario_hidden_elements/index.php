<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

include "PersonManager.php"; 
include "Person.php";

if(isset($_GET['name']) && isset($_GET['surname'])){
    $p = new Person($_GET['name'],$_GET['surname']);
    //if(isset($_GET['hiddenElement'])){
    $pm = new PersonManager(($_GET['hiddenElement']));
    //}else{
    //$pm = new PersonManager($p);
    //}
    $pm->addName($p);
}else{
    $pm = new PersonManager();
}

?>

<form action="index.php" method="GET" name="formulario">
<input  name="name" type="text">
<input name = "surname" type="text">
<br>
<br>
<input type="submit">

<input  name="hiddenElement" type="hidden" value= "<?php echo $pm->toString();?>">
<br>
<br>

<?php 
echo $pm->toString();
?>


</form>
</body>
</html>
