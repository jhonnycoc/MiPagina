<?php
$personas=array(
    array("Laura","Alonso",10),
    array("Guadalupe","Alonso",8),
    array("Maritza","Franco",29),
    array("Andrey","Alonso",27),
);
//Obener un Valor

$fila=3;
$columna=1;
echo $personas[$fila][$columna];

//Recorrer un arreglo multidimencional

for($fila=0;$fila<count($persona);$fila++):
for($columna=0;$columna<count($personas[$fila]);$columna++):
    echo "valor-> ".$personas[$fila][$columna];
    echo "<br></br>";
endfor;
endfor;
//Multidimencional Mixto

$barcos=array(
'A'=>array("nada","nada","barco2",),
'B'=>array("nada","nada","nada",),
'C'=>array("barco","nada","nada",),
'D'=>array("nada","nada","barco",),
);
echo "<br></br>";
echo $barcos['A'][2];
foreach($barcos as $clave=>$valor):
    echo "<br></br>";
    for($indice=0; $indice<count($valor);$indice++):
        echo "cordenadas -> ".$clave. "-" - $indice."valor ->".$valor[$indice];
    endfor;

endforeach;





?>