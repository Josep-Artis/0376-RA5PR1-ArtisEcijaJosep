<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAULA DE MULTRIPLICAR</h1>
    <p>Introducimos un numero</p>
    <?php
    $num = 8;
    $minimo = 0;
    $maximo = 10;
    for ($i = $minimo; $i <= $maximo; $i++) { 
        echo "$num x $i = " . ($num * $i) . "<br>";
    }?>
</body>
</html>