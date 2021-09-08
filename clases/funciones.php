<?php
function name(){
echo "Hola soy una Funcion";

}
name();
echo "<br></br>";
$age=18;
if ($age<=18){
    function party(){
        echo "Bienvenido a la Fiesta";
    } 
}
party();
echo "<br></br>";
//funciones dentro de otras funciones

function foo(){
    function bar(){
        echo "Hola ya existo";

    }
}

foo();
bar();
?>