<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 9</title>
</head>
<body>
    <h1>Solución punto 9</h1>
    <!-- ejemplo form
    <form method="post" action="pagina2.php"> --- action indica el nombre del archivo que recibirá los datos ingresados por el operador en el formulario y que serán enviados al servidor cuando se presione el botón (submit).
        Ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="confirmar">
    </form> -->

    <form method="post" action="tuto1p9.php">
        Ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        Ingrese su edad:
        <input type="number" name="edad">
        <br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>