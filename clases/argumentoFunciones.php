<?php
//Argumenton de Funciones
function suma($numero1,$numero2){
$suma=($numero1+$numero2);
echo "la suma es $suma";
}
suma(10,15);
echo "<br></br>";

//Suma Array
suma_array(array(10,5,4,6));

function suma_array($entrada){
    $num1=$entrada[0];
    $num2=$entrada[1];
    echo "El Resultado Es ".($num1+$num2);
    echo "<br></br>";

    //funcion por referencia

    function resta (&$num9){

        $num20=$num;
    }
    $result=13;
    resta($result);

    //funcion rescursiva

    function recusrividad ($a){
        If($a<20){
            echo "$a\n";
            echo "<br></br>";
            recusrividad($a+1);

        }
    
    }
recusrividad(1);
    
}


?>