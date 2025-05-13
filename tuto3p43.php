<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 42</title>
</head>
<body>
    <h1>Solución punto 42</h1>
    <?php
        if (is_numeric($_REQUEST['dia']) && is_numeric($_REQUEST['mes']) && is_numeric($_REQUEST['ano']))
        {
            if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['ano']))
                echo "La fecha ingresada es correcta";
            else 
                echo "La fecha no es válida";
        }
        else
            echo "La fecha no es válida";
    ?>
</body>
</html>    