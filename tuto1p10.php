<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 10</title>
</head>
<body>
    <h1>Solución punto 10</h1>
    <?php
        // ejemplo
        // echo "El nombre ingresado es:";
        // echo $_REQUEST['nombre'];

        echo  $_REQUEST['nombre'];
        if ($_REQUEST['radio1']=="sin")
        {
            echo ", no tiene estudios";
        }
        elseif ($_REQUEST['radio1']=="primarios")
        {
            echo ", tiene estudios de nivel primario";
        }
        else
        {
            echo ", tiene estudios de nivel secundario";
        }
    ?>
</body>
</html>