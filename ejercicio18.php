<?php

class persona {

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo " Hola soy ".$this->nombre;
    }
public function mostrarEdad(){
    $this->edad= 20;
    return $this->edad;
}
}

$objAlumno= new persona(); //Instancia o creación de un objeto
$objAlumno->asignarNombre(" Pedro"); //Llamando un  metodo

echo $objAlumno->nombre; //Imprimir una propiedad

$objAlumno2= new persona(); 
$objAlumno2->asignarNombre(" Juan"); 

echo $objAlumno2->nombre; 

$objAlumno2->imprimirNombre();
$objAlumno2->mostrarEdad();
?>