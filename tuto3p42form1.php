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
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<p style='color: green;'>La queja se ha registrado correctamente.</p>";
        }
    ?>
    <form action="tuto3p42form2.php" method="post">
        Ingrese su nombre:
        <input type="text" name="nombre"><br><br>
        Ingrese la queja:
        <textarea name="queja" rows="7" cols="100"></textarea> <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="tuto3p42.php">Ver quejas registradas</a>
</body>
</html>    