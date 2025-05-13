<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 42</title>
</head>
<body>
    <h1>Solución punto 42</h1>
    <h2>Quejas: </h2>
    <?php
        $ar=fopen("quejas.txt","r") or die("No se pudo abrir el archivo");
        while (!feof($ar)) {
            $linea=fgets($ar);
            $lineasalto=nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
    ?>
</body>
</html>    