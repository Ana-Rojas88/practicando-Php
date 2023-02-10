<?php

$palabras = array("sol", "luna", "cielo", "estrella", "cometa");
//$palabrasDesordenadas = array();

$form = "<form action='analisis.php'>";
for ($i=0; $i < count($palabras); $i++) {
   // $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
 $form .= "La palabra: ".str_shuffle($palabras[$i])." "."<input type='text' name='palabra".$i."'>"."<br>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";
// print_r($palabrasDesordenadas);
// echo "
// <form action='analisis.php'>
// <input type='text' name='palabra0'>
// <input type='text' name='palabra1'>
// <input type='text' name='palabra2'>
// <button type='submit'>Enviar</button>
// </form>

// ";
echo $form.$button.$formCierre;
?>