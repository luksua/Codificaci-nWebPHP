<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 35</title>
</head>
<body>
    <h1>Solución punto 35</h1>
    <?php
        if (isset($_REQUEST['opcion']) && $_REQUEST['opcion'] == "desuscribirse") {
            setcookie("noticia", "", time() - 3600, "/"); // Elimina la cookie
            echo "Cookie eliminada.<br>";
        } elseif (isset($_REQUEST['opcion'])) {
            setcookie("noticia", $_REQUEST['opcion'], time() + (60 * 60 * 24 * 365), "/"); // Crea la cookie
            echo "Cookie creada correctamente.<br>";
        }
    ?>
    <a href="tuto3p35form.php">Ir a la otra página</a>
</body>
</html>