<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 41</title>
</head>
<body>
    <h1>Solución punto 41</h1>
    <?php
        if (isset($_REQUEST['direccion'])){
            echo "La direccion: $_REQUEST[direccion] tiene";
        } else {
            echo "No se ha enviado la dirección";
        }

    ?>
    <img src="tuto3p41.php?puntos=<?php echo $_REQUEST['puntos'];?>">
</body>
</html>     