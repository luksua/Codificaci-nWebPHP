<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 37</title>
</head>
<body>
    <h1>Solución punto 37</h1>
    <?php
        session_start();
        if (isset($_SESSION['nombre'])){
            echo "Hola ".$_SESSION['nombre'].". Bienvenido a la página de inicio";
        } else {
            echo "No puede visitar esta pagina";
        }
    ?>
</body>
</html>                            