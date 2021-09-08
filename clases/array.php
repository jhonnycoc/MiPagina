<?php
//Array
$color="morado";
$arrayinexado=array(1,2,"Hola",$color);
echo "<br></br>";
////obtener un valor
echo $arrayinexado[2];
echo "<br></br>";
///Recorrer array inexado
for($i=0;$i<count($arrayinexado);$i++):
    echo $arrayinexado[$i];
    echo "<br></br>";
endfor;
//Array Asociativo
$arrayasociativo=array('nombre'=>'marines','color'=>'morado','saludo'=>'hola',);
echo $arrayasociativo['saludo'];
foreach($arrayasociativo as $clave => $valor):
    echo "clave $clave ..... valor $valor";
    echo "<br></br>";
    endforeach
?>