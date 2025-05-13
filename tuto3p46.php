<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 46</title>
</head>
<body>
    <h1>Solución punto 46</h1>
    <?php 
    $asciiTable = "";

    for ($i = 32; $i <= 126; $i++) { 
        $asciiTable .= "Código: $i - Carácter: " . chr($i) . "<br>";
    }

    echo $asciiTable;
    ?>
</body>
</html>