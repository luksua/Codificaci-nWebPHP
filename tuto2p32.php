<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 32</title>
</head>
<body>
    <h1>Solución punto 32</h1>
    <?php
        if (isset($_REQUEST['pos']))
            $inicio = $_REQUEST['pos'];
        else
            $inicio = 0;

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT * FROM cursos LIMIT $inicio, 3") or die("Problemas en el select: " . mysqli_error($conexion));
        $impresos = 0;

        // registros retornados y se cuentan
        while ($reg = mysqli_fetch_array($registros)) {
            $impresos++;
            echo "Codigo: " . $reg['codigo'] . "<br>";
            echo "Nombre del Curso: " . $reg['nombrecurso'] . "<br>";
            echo "<hr>";
        }

        if ($inicio == 0) {
            echo "<";
        } else {
            $anterior = $inicio - 3;
            echo "<a href='tuto2p32.php?pos=$anterior'><</a>";
        }
        if ($impresos == 3) {
            $proximo = $inicio + 3;
            echo "<a href='tuto2p32.php?pos=$proximo'>></a>";
        } else {
            echo ">";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>