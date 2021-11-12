<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Sueldo de un profesor de $1500 con incremento anual del 10% durante 6 años</h1>

<?php
    $sueldo = 1500;
?>


@for($i=1; $i<=6; $i++)
<?php
    $sueldo = $sueldo * 1.10;
?>

<h2>Año {{$i}} = {{$sueldo}}</h2>
@endfor


</body>
</html>