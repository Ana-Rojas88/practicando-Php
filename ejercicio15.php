<?php

//Funciones

function imprimirNombre($nombre, $apellido=""){

    //Rutinas (instrucciones)
    echo "Hola ".$nombre." ".$apellido."<br/>";

}

//Llamar a la función 
imprimirNombre("Ana");
imprimirNombre("Pedro", "Perez");
imprimirNombre("Hector", "Hurtado");

$numeroAleatorio= rand(1,10);

echo "Número aleatorio ".$numeroAleatorio."<br/>";

$nombre= "Ana Rojas";
$nombreMayusculas= strtoupper($nombre);

echo "Cambiando de minúscula a mayúscula ".$nombreMayusculas."<br/>";

$hoy= date("Y-m-d");
echo $hoy."<br/>";


echo "Raiz cuadrada de 9 es :  ";
echo sqrt(9);
?>