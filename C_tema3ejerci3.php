<?php

$palabras = array("hola", "mañana", "tarde");
$caracter = $_POST['n1'];
//var_dump($caracter);
function encuentra($palabras, $caracter)
{
    foreach ($palabras as $palabra) {
        if (strpos($palabra, $caracter)) {
            return true;
            echo "correcto";
        }
        else{
        return false;
        echo "aqui $caracter";
        }
        
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tema3ejerci3.php" method="post">
        Caracter: <input type="text" name="n1" value="<?php echo $caracter; ?>"><br>
        <input type="submit" name="busqueda" value=":)">
    </form>
    <?php
    $x = encuentra($palabras, $caracter);
    //var_dump($x);
        if ($x == true) {
            echo "este caracter esta en las palabras";
        } else {
            echo "este caracter NO esta en las palabras  ";
        }   
    //echo "hola";
    encuentra($palabras, $caracter);
    if (isset($caracter)) {
        echo "   si";
    }
    ?>
</body>

</html>