<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Dinero de una caja registradora</h1>
<h2>En la caja hay:</h2>
<h2>- 3 monedas de 5</h2>
<h2>- 6 monedas de 2</h2>
<h2>- 2 billetes de 20</h2>
<h2>- 4 billetes de 100</h2>
<h2>- 1 billete de 500</h2>

<?php
    $m1 = 1;
    $m2 = 2;
    $m5 = 5;
    $m10 = 10;
    $b20 = 20;
    $b50 = 50;
    $b100 = 100;
    $b200 = 200;
    $b500 = 500;

    $total = (3*$m5) + (6*$m2) + (2*$b20) + (4*$b100) + ($b500);
?>

<h1>El total de la caja registradora es: {{$total}}</h1>


</body>
</html>