<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 34</title>
</head>
<body>
    <h1>Solución punto 34</h1>
    <!-- <form action="tuto3p34.php" method="post">
        Seleccione de que color desea que sea la página de ahora en más: <br>
        <input type="radio" value="red" name="radio">Rojo<br>
        <input type="radio" value="green" name="radio">Verde<br>
        <input type="radio" value="blue" name="radio">Azul<br><br>
        <input type="submit" value="Crear cookie">
    </form> -->
    <form action="tuto3p34.php" method="post">
        Ingrese su nombre de usuario:
        <input type="text" name="usuario" value="<?php if (isset($_COOKIE['usu'])) echo $_COOKIE['usu'];?>"><br><br>
        <input type="submit" value="Crear cookie">
    </form>
</body>
</html>