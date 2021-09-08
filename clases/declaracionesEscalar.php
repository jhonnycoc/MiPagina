<?php
//Modo Coersitivo
declare(strict_types=1);
function suma (int $a, int $b){
    return $a+$b;

}
var_dump(suma(7,5));
echo "<br></br>";
//Modo estricto
function resta (int $a, int $b){
    return $a+$b;

}
var_dump(suma(7,5));
echo "<br></br>";
function multi($a , $b): int{
return $a*$b;

}
var_dump(multi(7,5));
?>