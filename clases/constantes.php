<?php
//CONVERSION A NUMEROS ENTEROS

//CONSTANTE

$variable='20 Hola Mundo';

$suma=20+$variable;

echo $suma;
echo gettype($suma);


$numeros="1,2,3,4";
$Arraynumeros=explode(",",$numeros,5);
echo $Arraynumeros[0];
echo $Arraynumeros[1];

$arraycolores=array("azul","amarillo","morado","rojo");
$string=implode(",",$arraycolores);
echo $string;

?>