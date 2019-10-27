<?php
//funciones sin parametros

function bienvenido(){

  echo "bienvenido al curso de php";


}

bienvenido();


echo "<br><br>";
//funciones con parametros o argumentos
function saludar($hola){
  echo $hola;

}

saludar("Hola a todos");

echo "<br><br>";

//funciones con retorno
function retorno($retorna){

  return $retorna;
}
echo retorno("retornando función");

 ?>
