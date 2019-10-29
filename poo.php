<?php
/*
Las clases son plantillas de los objetos para invocarlos luego
 */
class Color
{
    public $camisa;
    public $gorra;

    public function Ropa(){

      echo "<p>Ropa de color Camisa: $this->camisa, Gorra: $this->gorra</p>";

    }

}
//se crea un objeto que se deriva de clase color
$a = new Color();
$a -> camisa = " roja ";
$a -> gorra = " azul";
$a -> Ropa();

$a = new Color();
$a -> camisa = " negra ";
$a -> gorra = " verde";
$a -> Ropa();



 ?>
