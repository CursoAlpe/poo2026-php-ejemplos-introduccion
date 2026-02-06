<?php
/*
crear 2 variables llamadas numero1 y numero2 
asignar a las variables 10 y 12
calcular la suma, la resta y la multiplicacion de esos numero
*/
// declaracion
$numero1=0;
$numero2=0;
$suma=0;
$resta=0;
$multiplicacion=0;
$division=0;
// introducir
$numero1=10;
$numero2=12;

$suma= $numero1 + $numero2;
$resta= $numero1 - $numero2;
$multiplicacion= $numero1 * $numero2;
$division= $numero1 / $numero2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>

        <li>Resultado de suma: <?= $suma ?> </li>
        <li>Resultado de resta: <?= $resta ?> </li>
        <li>Resultado de multiplicacion: <?= $multiplicacion ?> </li>
        <li>Resultado de division: <?= $division ?> </li>
    </ul>
</body>
</html>