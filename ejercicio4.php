<?php

if ($_POST) {
   // Recibir información del formulario HTML (metodo POST)
$txtNombre=$_POST['txtNombre'];
$txtApellido=$_POST['txtApellido'];

echo "Hola ".$txtNombre."".$txtApellido;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>