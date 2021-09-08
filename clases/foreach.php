<?php
$array=array(1,2,3,4,5);
foreach($array as &$valor){
   $valor=$valor*2;   
}
foreach($array as $clave => $valor2){
    echo "$clave .... $valor2";
    echo "<br></br>";

 }


?>