<?php
//Operadores de Comparacion
//Operador Igual
$numero1=13;
$numero2="13";
echo "Hola soy el Operador ==";
echo "<br></br>";
var_dump($numero1==$numero2);
echo "<br></br>";

//Operador Identico
echo "Hola soy el Operador Identico===";
echo "<br></br>";
var_dump($numero1===$numero2);
echo "<br></br>";

//Operador Diferente

//Operador Identico
echo "Hola soy el Operador Diferente!=";
echo "<br></br>";
var_dump($numero1!=$numero2);
echo "<br></br>";

//Operador no Identico
echo "Hola soy el Operador no Identico!==";
echo "<br></br>";
var_dump($numero1!==$numero2);
echo "<br></br>";

//Operador Mayor que >
$a=14;
$b=13;
echo "Hola soy el Operador Mayor Que >";
echo "<br></br>";
var_dump($a>$b);
echo "<br></br>";

//Operador Menor que <
$a=14;
$b=13;
echo "Hola soy el Operador Menor Que <";
echo "<br></br>";
var_dump($a<$b);
echo "<br></br>";

//Operador Mayor o Igual que >=
$a=14;
$b=13;
echo "Hola soy el Operador Mayor o Igual Que >=";
echo "<br></br>";
var_dump($a>=$b);
echo "<br></br>";

//Operador Menor o Igual que <=
$a=14;
$b=13;
echo "Hola soy el Operador Mayor o Igual Que <=";
echo "<br></br>";
var_dump($a<=$b);
echo "<br></br>";

//Operador de Nave Espacial <=>
$a=14;
$b=13;
echo "Hola soy el Operador Nave Espacial <=>";
echo "<br></br>";
var_dump($a<=>$b);
echo "<br></br>";
var_dump($b<=>$a);
echo "<br></br>";
var_dump($b<=>$b);
echo "<br></br>";

//Operador Elvis ?:
$resultado=null;
echo "Hola soy el Operador Elvis ?:";
echo "<br></br>";
var_dump($resultado?:"no hay datos");
echo "<br></br>";

//Operador Ternario
echo "Hola soy el Operador Ternario ?:";
echo "<br></br>";
var_dump($resultado?"Soy verdadero":"Soy falso");
echo "<br></br>";

//Operador de funcion null
echo "Hola soy el Operador de funcion null ??";
echo "<br></br>";
var_dump($resultado??"no hay datos");
echo "<br></br>";




?>