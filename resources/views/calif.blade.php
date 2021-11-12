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
    $calif = 8;
?>

<h1>Calificacion del estudiante: 8</h1>

@if($calif == 10)
<h2>Saco una A</h2>
@elseif($calif == 9)
<h2>Saco una B</h2>
@elseif($calif == 8)
<h2>Saco una C</h2>
@elseif($calif == 7 or $calif = 6)
<h2>Saco una D</h2>
@else
<h2>Saco una F</h2>
@endif



</body>
</html>