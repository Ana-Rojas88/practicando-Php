<?php

//Array

$frutas=array("fresa", "pera", "manzana");

print_r($frutas );
echo "<br/>".$frutas[1]."<br/>";

for ($indice=0; $indice<3 ; $indice++) { 
    echo $frutas[$indice]."<br/>";
}

$frutas2=array("m"=>"mango","p"=>"piña","g"=>"guanabana");

print_r($frutas2);
echo "<br/>".$frutas2["m"]."<br/>";

foreach ($frutas2 as $indice => &$valor) {
    echo $frutas2[$indice]."<br/>";
    echo "El valor ".$valor."Tiene el índice:".$indice."<br/>";
}

?>