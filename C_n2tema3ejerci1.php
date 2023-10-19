<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>DOS ARRAYS :</h1>
    <?php
    $nombres = array("a" => 4, "c" => 6, "e" => 8, "g" => 10, "i" => 12);
    $nombres2 = array("b" => 3, "d" => 6, "f" => 9, "h" => 12);
    var_dump($nombres);
    echo "</br>";
    var_dump($nombres2);
    echo "</br>";
    $coincidencias = array_intersect($nombres, $nombres2);
    echo "COINCIDENCIAS:  </br>";
    print_r($coincidencias);
    echo "</br>";
    $mezclar = (array_merge($nombres, $nombres2));
    echo "MEZCLA DE LOS DOS ARRAYS </br>";
    print_r($mezclar);

    ?>
</body>

</html>