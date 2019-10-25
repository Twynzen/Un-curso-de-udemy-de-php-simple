<?php
//variable tipo númerico
$numero = 10;

echo "Esto es un número" .$numero;
echo "<br><br>";

//variable tipo texto
$texto = "Esto esta una cadena de texto";

echo "Mi cadena". $texto;
echo "<br><br>";

//variables de tipo arreglo

$arreglo = array("Daniel ", "Pepe", "Luca");

echo $arreglo[0];
echo "<br><br>";

//Variables tipo arreglo con propiedades

$colores = array("color1"=>"rojo", "color2" => "azul");

echo $colores["color2"];
echo "<br><br>";
//variable de tipo  objeto
$objeto = (object)["mueble1"=>"armario","mueble2"=>"escritorio"];

echo $objeto->mueble2




 ?>
