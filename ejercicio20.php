<?php

if ($_GET) {
    $edad=$_GET['edad'];

    echo $edad;
    $nombre = ['Pedro', 'Maria', 'Ana'];
echo $nombre[2];
    if(in_array('Pedro', $nombre) && $edad < 5 ){
        echo "El juegute de este estudiante ira en la parte inferior de la bodega";
     }elseif(in_array('Maria', $nombre) && ($edad >= 5 and $edad <=7) ){
        echo "El juegute de este estudiante ira en la parte media de la bodega";
     } if(in_array('Ana', $nombre) && $edad > 7 ){
        echo "El juegute de este estudiante ira en la parte superior de la bodega";
     }
     else{
   echo "El juguete de este estudiante ira en la bodega de al lado";
 }

// function organizarJuguetes(){
//     if($edad < 5){
//         echo "El juegute de este estudiante ira en la parte inferior de la bodega";
//     }elseif ($edad>=5 && $edad<=7) {
//         echo "El juegute de este estudiante ira en la parte media de la bodega";
//     }elseif ( $edad>7) {
//         echo "El juegute de este estudiante ira en la parte media de la bodega";
// } else{
//     echo "El juguete de este estudiante ira en la bodega de al lado";
// }
    
// }

// organizarJuguetes();
 }

?>