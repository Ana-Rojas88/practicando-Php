<?php

function arbolito($tamaño){
    for ($i=0; $i<$tamaño; $i++){
    echo str_repeat("*", $i)."</br>";
    }
}

arbolito(15);
?>