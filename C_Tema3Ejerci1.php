<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Tema3Ejerci1">
   
    </form>
    <h1>Nombres</h1>
    <?php
$nombres=["Juan","Daniela","Hector", "Gabriela","Carmen"];
foreach($nombres as $value){
    echo "$value </br>";
}
var_dump($nombres) . "</br>";
unset($nombres[2]);
$sinhector=[];
foreach($nombres as $value){
    $sinhector[]= "</br> $value";;
}

var_dump($sinhector);
?>
</body>
</html>