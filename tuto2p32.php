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
        echo "Listado de inscritos en el curso $_REQUEST[curso] <br>";
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT nombre from alumnos as alu
        join cursos as cur on alu.codigocurso = cur.codigo where codigocurso = $_REQUEST[curso]") or die("Problemas en el select: ".mysqli_error($conexion));
        $a = 1;
        while ($reg = mysqli_fetch_array($registros)) 
        {
            echo "$a. " . $reg['nombre'] . "<br>";
            $a++;
        }   
        mysqli_close($conexion);
    ?>
</body>
</html>