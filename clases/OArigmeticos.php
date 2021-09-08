<?php
//OPeradores de Asignacion

$a=15;
$b=5;
//Operadores combinados
$a+=$b;
echo $a;
echo "<br></br>";

$a*=$b;
echo $a;
echo "<br></br>";

//Operadores Incremento y Decremento

//Incremento

$a=15;
echo "post- incremento".$a++."\n";
echo "<br></br>";
echo "resultado".$a."\n";
echo "<br></br>";

//Decremento

$a=15;
echo "post- decremento".$a--."\n";
echo "<br></br>";
echo "resultado".$a."\n";

?>