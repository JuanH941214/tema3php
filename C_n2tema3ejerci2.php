<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Clase 201</h1>
    <h2>notas: </h2>
    <?php
    $filosofia = array("Daniela_f" => 6, "Ana_f" => 2, "Jaime_f" => 4, "Pedro_f" => 9);
    $matematicas = array("Daniela_m" => 6, "Ana_m" => 2, "Jaime_m" => 4, "Pedro_m" => 7);
    $español = array("Daniela_e" => 6, "Ana_e" => 2, "Jaime_e" => 5, "Pedro_e" => 4);
    $ingles = array("Daniela_i" => 2, "Ana_i" => 6, "Jaime_i" => 7, "Pedro_i" => 6);
    $historia = array("Daniela_h" => 5, "Ana_h" => 8, "Jaime_h" => 2, "Pedro_h" => 4);
    $x=array_merge($filosofia,$matematicas,$español,$ingles,$historia);

    /*foreach ($filosofia  as $alumno=>$valor){
       echo "$alumno- filosofia nota: $valor </br>";
    }*/
    foreach ($x  as $alumno=>$valor){
        echo "$alumno- nota: $valor </br>";
     }
    echo "</br>";
    echo "la nota media de cada alumno es : </br>";
    function mediaAlumnos($filosofia, $matematicas, $español, $ingles, $historia)
    {
        $operacion = ($filosofia + $matematicas + $español + $ingles + $historia) / 5;
        return $operacion;
    }
    $resultadoMedia = array_map("mediaAlumnos", $filosofia, $matematicas, $español, $ingles, $historia);
    $resultadoMedia = array_combine(array_keys($filosofia), $resultadoMedia);
    print_r($resultadoMedia);
    
    echo "el Promedio de".$resultadoMedia['Daniela'];
    echo "</br>";
    $sumaclase = array_sum($resultadoMedia); 
    echo "</br>";
    $mediaclase = $sumaclase / count($resultadoMedia);
    
    echo " la media de clase es : $mediaclase";

    //media de cada alumno 
    //mdia de clase entera

    ?>
</body>

</html>