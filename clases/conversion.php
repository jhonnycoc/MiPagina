<?php
//Comillas Dobles

$palabra="codigo ";

$union=$palabra . "facilito";


echo $union;
echo "<br></br>";
$palabra .= "facilito2";


echo $palabra;
echo "<br></br>";
//interpolacion
//Forma 1

echo "bienvenido $palabra adios";
echo "<br></br>";
//forma 2
echo "bienvenido {$palabra} adios";
echo "<br></br>";

//Caracteres Escapados

echo "Hola Mundo <br></br> adios";

echo "<br></br>";

echo '$palabra Hola';
echo "<br></br>";
//No Interpolacion
echo 'I\'M';
echo "<br></br>";
echo 'mi directorio es D:\\hola';
//en comillas simples solo reconoce una diagonal




?>