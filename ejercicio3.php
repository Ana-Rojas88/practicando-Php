<?php
if ($_GET) {
    
    $nombre=$_GET['nombre'];

    echo "Hola ".$nombre."</br>";

    print_r($_REQUEST);
}
?>