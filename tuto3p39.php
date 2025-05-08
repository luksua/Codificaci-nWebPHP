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
        if ($_REQUEST['clave']<>"z80"){
            header("Location: tuto3p39form.php?error=1");
        } else {
            session_start();
            $_SESSION['clave'] = $_REQUEST['clave'];
            echo "Clave correcta. Bienvenido a la página de inicio";
        }

    ?>
</body>
</html>     