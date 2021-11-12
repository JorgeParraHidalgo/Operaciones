<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $bma = 10;
    $bme = 4;
    $a = 4;
    $total = ($bma + $bme)*($a)/2;
?>

<h1>Calcular el área de un trapecio</h1>
<h2>Base mayor: 10</h2>
<h2>Base menor: 4</h2>
<h2>Altura: 4</h2>
<h1>Area: {{$total}}</h1>


</body>
</html>