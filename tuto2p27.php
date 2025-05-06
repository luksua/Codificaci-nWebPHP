<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 27</title>
</head>
<body>
    <h1>Solución punto 27</h1>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"SELECT alu.codigo as codigo,
        nombre, mail, codigocurso, nombrecurso from alumnos as alu
        inner join cursos as cur 
        on cur.codigo = alu.codigocurso
        where alu.codigo ='$_REQUEST[codigo]'") or die("Problemas en el select: ".mysqli_error($conexion));
        while ($reg=mysqli_fetch_array($registros))
        {
            echo "Codigo: ".$reg['codigo']."<br>";
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Mail: ".$reg['mail']."<br>";
            echo "Curso: ".$reg['nombrecurso']."<br>";
        }
        mysqli_close($conexion);

        if ($reg != mysqli_fetch_array($registros))
        {
            echo "No existe el codigo del alumno ingresado.";
        }
    ?>
</body>
</html>