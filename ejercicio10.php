<?php

if ($_POST) {

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

//suma
$suma=$valorA+$valorB;
$resta=$valorA-$valorB;
$multiplicacion=$valorA*$valorB;
$division=$valorA/$valorB;

echo "La suma es: ".$suma."<br/>";
echo  "La resta es: ".$resta."<br/>";
echo  "La multiplicación es: ".$multiplicacion."<br/>";
echo  "La división es: ".$division."<br/>";

if ($valorA==$valorB) {
    echo "El valor de A es igual al valor de B <br/>";

    if ($valorA==4) {
        echo "El valor es 4 <br/>";
    }
    if ($valorA==5) {
        echo "El valor es 5 <br/>";
    }
}
if (($valorA==$valorB) && ($valorA==4)) {
    echo "El valor de A es igual a B y es un número 4";
}
} 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidados</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
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