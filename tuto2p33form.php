<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 33</title>
</head>
<body>
    <h1>Solución punto 33</h1>
    <form action="tuto2p33.php" method="post" enctype="multipart/form-data"> <!-- indicamos que dentro del formulario de carga se envían archivos. -->
        Seleccione los archivos a subir: <br>
        <input type="file" name="fotos[]" id="archivo" multiple><br><br> <!-- Atributo multiple -->
        <input type="submit" value="Subir"><br>
    </form>
</body>
</html>