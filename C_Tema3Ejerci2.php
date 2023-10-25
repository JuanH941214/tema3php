<?php
$X = array (10, 20, 30, 40, 50,60);
$B;
var_dump($X);
echo count($X) . " tiene el array X";
echo"\nelimino un elemento del array X: \n";
unset($X[3]);
var_dump($X);

$c=[];
foreach($X as $B){
$c[]=$B;
}
var_dump($c);
echo count($X) . " tiene el Nuevo array x";


?>
