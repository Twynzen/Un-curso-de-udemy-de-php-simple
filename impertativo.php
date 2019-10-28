<?php
//codigo imperativo
$color1 = (object)["camisa"=>"azul", "cachucha"=>"verde"];
$color2 = (object)["camisa"=>"blanca", "cachucha"=>"gris"];
function ropa($color){

  echo "<p>Ropa de color Camisa: $color->camisa, Cachucha: $color->cachucha</p>";

}
ropa($color2);

 ?>
