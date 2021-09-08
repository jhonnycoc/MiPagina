<?php
//regresar un valor
function resta($num){
    return $num-10;
    echo "<br></br>";
    
}
echo resta(40);
function hacer_cafe ($tipo="capuchino"){
    return "el cafe es de $tipo";
    echo "<br></br>";
}
echo "<br></br>";
echo hacer_cafe();
echo "<br></br>";
echo hacer_cafe(null);
echo "<br></br>";
echo hacer_cafe("moka");
echo "<br></br>";

function persona($nombre="fulanito",$apellido="fulanito",$edad=32){
    return "Bienvenido {$nombre} {$apellido} de {$edad} años";
}
echo persona("Jhonny","Alonso");
echo "<br></br>";
function animales($animales=array("sin dato ","sin dato "),$tipo="sin tipo "){
    return "los animales son".implode(",",$animales).$tipo;
}
    echo animales();
    echo animales(array("gato ","tigre "),"felinos");
function flores(){
$flor="clavel";
$color="morado";
$cantidad=10;
return array($flor,$color,$cantidad);

}
list ($fl,$co,$can)=flores();
echo "<br></br>";
echo "hola soy una {$fl} de color {$co} y somos {$can}";
    

?>