<?php

if ($_POST) {

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

//suma
$suma=$valorA+$valorB;
$resta=$valorA-$valorB;
$multiplicacion=$valorA*$valorB;
$division=$valorA/$valorB;

echo "<br/>"."La suma es: ".$suma;
echo  "<br/>"."La resta es: ".$resta;
echo  "<br/>"."La multiplicación es: ".$multiplicacion;
echo  "<br/>"."La división es: ".$division;
} 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
         Valor A:
        <input type="text" name="valorA" id="">
        <br/>
         Valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>