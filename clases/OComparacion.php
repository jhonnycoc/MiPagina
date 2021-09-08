<?php
//Adiccion (suma)
$a=47;
$b=15;
$suma=$a+$b;
echo $suma;
echo "<br></br>";

//Sustraccion (resta)
$resta=$a-$b;
echo $resta;
echo "<br></br>";

//Multiplicacion 
$multiplicacion=$a*$b;
echo $multiplicacion;
echo "<br></br>";

//Divicion
$division=$a/$b;
echo $division;
echo "<br></br>";

//Dividendo
$residuo=$a-($b*3);
$modulo=$a%$b;
echo"residuo $residuo" ;
echo "<br></br>";
echo"modulo $modulo" ;
echo "<br></br>";

//Exponenciacion
$exponenciacion=$a**$b;
echo $exponenciacion;
echo "<br></br>";

//Identidad y Negacion
$identidad=+$resta;
echo $resta;
echo $identidad;
echo "<br></br>";

$negacion=-$resta;
echo $resta;
echo $negacion;
?>