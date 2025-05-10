<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de Sesión</title>
</head>
<body>
    <h1>Cierre de Sesión</h1>
    <?php
        session_start();
        session_destroy();
        echo "Has cerrado sesión con éxito.<br>";
        header("Location: login.php"); 
    ?>
</body>
</html>