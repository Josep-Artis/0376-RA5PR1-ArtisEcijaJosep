<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAULA DE MULTIPLICAR</h1>

    <?php
    // variable de número
    $num = 8; 

    //Validación entre 1 y 12
    if ($num < 1 || $num > 12) {
        echo "<p class='error'>Error: El número ha de ser entre 1 i 12.</p>";
    } else {
        echo "<table>";
        // Tu bucle, pero generando filas (tr) y celdas (td)
        for ($i = 1; $i <= 10; $i++) { 
            $clase = "";
            if ($i % 2 == 0) {
                $clase = "class='gris'";
            }

            echo "<tr $clase>";
                echo "<td>$num x $i</td>";
                echo "<td>" . ($num * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>