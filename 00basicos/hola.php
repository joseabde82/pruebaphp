<?php
//comentario de una sola linea
/*
Esto es
un comentario
multilinea
*/
//Imprimir en pantalla
echo ("Hola Mundo");
echo "<br />Hola cruel mundo <br />estoy <h1> aprendiendo PHP </h1> ";
//variables
$nombre="Jose";
$Nombre="Carlos";

//concatenación de cadenas y variables
echo $nombre."&nbsp;".$Nombre;
echo "<br />";
$num1=5;
$num2=75;

$suma=$num1+$num2;
echo $suma;
echo "<br />La variable \$suma tiene el valor de $suma <br />";

$modulo = $num2 % 2;
if($modulo == 0){
    echo "El n&uacute;mero es Par";
}else{
    echo "El n&uacute;mero es Impar";
}
echo "<br />";

for($i=0;$i<=20;$i++){
    echo $i."<br />";
}
?>