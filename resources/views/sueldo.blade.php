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
    $horas = 51;
    $pago_regular = $horas * 20;
?>

<h1>Horas totales trabajadas: 51</h1>
<h2>la hora se paga $20 y se mantiene las primeras 40 horas, a partir de 40 cada hora se paga el doble</h2>
<br>

@if($horas < 41)
<h1>el pago es: {{$pago_regular}}</h1>
@else($horas > 40)
<?php
    $extra = ($horas - 40) * (40);
    $total = $extra + 800;
?>
<h1>El pago es: {{$total}}</h1>
@endif



</body>
</html>