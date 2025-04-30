<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
<h1>Solución punto 4</h1>
<br>
<?php
    // $dia=date("d");
    // if ($dia<=10)
    // {
    //  echo "sitio activo";
    // }
    // else
    // {
    //  echo "sitio fuera de servicio";
    // }
    
    $num = rand(1,100);
    echo "<h2>$num</h2>";

    if ($num <= 50)
    {
        echo "<h2>El número es menor que 50</h2>";
    }
    else
    {
        echo "<h2>El número es mayor que 50</h2>";
    }
?>
</body>
</html>