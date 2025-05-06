<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 30</title>
</head>
<body>
    <h1>Solución punto 30</h1>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT alu.codigocurso, COUNT(alu.codigo) as cantidad, cur.nombrecurso 
        FROM alumnos as alu
        INNER JOIN cursos as cur 
        ON cur.codigo = alu.codigocurso
        GROUP BY alu.codigocurso") or die("Problemas en el select: " . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre del curso: " . $reg['nombrecurso'] . "<br>";
            echo "Cantidad de inscritos: " . $reg['cantidad'] . "<br>";
            echo "Nombres estudiantes: ";
            $codigocurso = $reg['codigocurso'];
            $nombre = mysqli_query($conexion, "SELECT nombre FROM alumnos WHERE codigocurso = $codigocurso");
            while ($nom = mysqli_fetch_array($nombre)) {
                echo $nom['nombre'] . " - ";
            }
            echo "<hr>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>