<?php
$i=4;
switch($i){
    case 1:
        echo "lunes";
    break;

    case 2:
        echo "martes";
    break;

    case 3:
        echo "miercoles";
    break;

    default:
    echo "no existe";
    echo "<br></br>";

    if($i==1):echo "lunes";
    elseif($i==2):echo "martes";
    elseif($i==3):echo "miercoles";
    else: echo "no existe";
endif;




}
?>