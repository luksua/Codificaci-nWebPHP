<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 9</title>
</head>
<body>
    <h1>Solución punto 9</h1>
    <?php
        // ejemplo
        // echo "El nombre ingresado es:";
        // echo $_REQUEST['nombre'];

        echo  $_REQUEST['nombre'];
        if ($_REQUEST['edad']<=18)
        {
            echo ", es mayor de edad";
        }
        else
        {
            echo ", es menor de edad";
        }
    ?>
</body>
</html>