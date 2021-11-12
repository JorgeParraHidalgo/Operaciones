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
    $edad = 20;
?>


<h1>Edad: 20 años</h1>

@if($edad >= 18)
<h2>Puede votar</h2>
@else
<h2>No puede votar</h2>
@endif


</body>
</html>