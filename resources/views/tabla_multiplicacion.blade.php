<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Tabla de multiplicar del 9</h1>

<?php
    $x = 9;
?>

@for($i=0; $i<=10; $i++)
<?php
    $r = $x * $i;
?>
{{$r}},
@endfor

</body>
</html>