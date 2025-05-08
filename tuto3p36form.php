<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 36</title>
</head>
<body>
    <h1>Solución punto 36</h1>
    <?php
        if (isset($_COOKIE['usu']))
        echo "Cookie de sesión creada. Su valor es $_COOKIE[usu]";
        else
        echo "No existe cookie de sesión";
    ?>
    <br>
    <a href="tuto3p36.php">Crear cookie de sesión</a>
</body>
</html>