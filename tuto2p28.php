<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 28</title>
</head>
<body>
    <h1>Solución punto 28</h1>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT nombrecurso from cursos") or die("Problemas en el select:".mysqli_error($conexion));
        echo "Cursos inscritos: <br>";
        $a = 1;
        while ($reg = mysqli_fetch_array($registros)) 
        {
            echo "$a: " . $reg['nombrecurso'] . "<br>";
            $a++;
        }
        echo "<br><br>";

        $registros=mysqli_query($conexion,"select count(*) as cantidad from cursos") or die("Problemas en el select:".mysqli_error($conexion));
        $reg=mysqli_fetch_array($registros);
        echo "La cantidad de cursos inscritos son: ".$reg['cantidad'];

        

        mysqli_close($conexion);
    ?>
</body>
</html>