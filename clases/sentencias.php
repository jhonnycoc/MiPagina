<?php
$a=20;
$b=20;
//if
if($a<$b){
    echo "a es menor";
}else{
    echo"a es mayor";
}
echo "<br></br>";

//elseif
if($a<$b):
    echo "a es menor";
    elseif($a==$b):
        echo "a y b son iguales";
    else:
    echo"a es mayor";
    endif;

echo "<br></br>";
?>