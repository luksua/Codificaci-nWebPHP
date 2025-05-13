<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 45</title>
</head>
<body>
    <h1>Solución punto 45</h1>
    <h3>Datos registrados:</h3>
    <?php 
        echo"Nombre: $_REQUEST[nombre]" . "<br>";
        echo "Email: $_REQUEST[email]" . "<br>";
        printf("Donación: $%'07d", $_REQUEST['donacion'])
    ?>
</body>
</html>     