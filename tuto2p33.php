<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 33</title>
</head>
<body>
    <h1>Solución punto 33</h1>
    <?php
        if (isset($_FILES['fotos'])) {
            foreach ($_FILES['fotos']['tmp_name'] as $key => $tmp_name){ // Se recorre el array $_FILES['fotos']['tmp_name'] para procesar cada archivo.
                $nombre = $_FILES['fotos']['name'][$key]; // se utiliza para acceder a los nombres y otros datos de cada archivo.
                $ruta = "uploads/" . $nombre;

                if (move_uploaded_file($tmp_name, $ruta)) {
                    echo "Archivo $nombre subido correctamente.<br>";
                    echo "<img src='$ruta' style='max-width: 200px;'><br>";
                } else {
                    echo "Error al subir el archivo $nombre.<br>";
                }
            }
        }
        else {
            echo "No se han seleccionado archivos<br>";
        }
    ?>
</body>
</html>