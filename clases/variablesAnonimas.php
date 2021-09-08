<?php
//Funciones anonimas
$saludo =function($nombre){
echo $nombre;

};
$saludo ("nombre");
echo "<br></br>";
$suma=function($num1,$num2){
    return $num1+$num2;
};
echo $suma(4,6);
echo "<br></br>";
//Funciones Variables 
function saludo($saludo){
    echo "Soy la variable funcion $saludo";
}
$variable='saludo';
echo $variable("Hola");
echo "<br></br>";

//funciones Internas de PHP
if(function_exists('xml_parser_create ')):
    echo "La funcion Existe";
else:
    echo "La Funcion no Existe";
endif;
echo "<br></br>";
print_r(get_extension_funcs("xml"));

?>
