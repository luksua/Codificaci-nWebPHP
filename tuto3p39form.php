<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 39</title>
</head>
<body>
    <h1>Solución punto 39</h1>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p style='color: red;'>Clave incorrecta. Inténtelo de nuevo.</p>";
        }
    ?>
    <form action="tuto3p39.php" method="post">
        Ingrese la clave:
        <input type="password" name="clave"><br><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>