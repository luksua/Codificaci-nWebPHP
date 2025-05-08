<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 34</title>
</head>
<body>
    <h1>Solución punto 34</h1>
    <?php
        //creacion de la cookie con setcookie( <nombre de la cookie>, <valor de la cookie>, <fecha de expiración>, <carpeta del servidor>)
        if (isset($_REQUEST['usuario'])) {
            setcookie("usu",$_REQUEST['usuario'],time()+60*60*24*365,"/"); // 1 año
            echo "La cookie se ha creado correctamente.<br>";
        } else {
            echo "No se ha enviado el nombre de usuario.";
        }
    ?>
    <br>
    <a href="tuto3p34form.php">Ir a la otra página</a>
</body>
</html>