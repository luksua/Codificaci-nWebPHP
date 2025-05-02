<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 21</title>
</head>
<body>
    <h1>Solución punto 21</h1>
    <h3>Cursos registrados</h3>
    <?php
        // listado alumnos
        // $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        // $registros=mysqli_query($conexion,"select codigo, nombre, mail, codigocurso from alumnos") or die("Problemas en el select:".mysqli_error($conexion));

        // while ($reg=mysqli_fetch_array($registros))
        // {
        //     echo "Codigo:".$reg['codigo']."<br>";
        //     echo "Nombre:".$reg['nombre']."<br>";
        //     echo "Mail:".$reg['mail']."<br>";
        //     echo "Curso:";
        //     switch ($reg['codigocurso']) {
        //         case 1:echo "PHP";
        //         break;
        //         case 2:echo "ASP";
        //         break;
        //         case 3:echo "JSP";
        //         break;
        //     }
        //     echo "<br>";
        //     echo "<hr>";
        // }
        // mysqli_close($conexion);

        // listado curso
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select codigo, nombrecurso from cursos") or die("Problemas en el select: ".mysqli_error($conexion));

        while ($reg=mysqli_fetch_array($registros))
        {
            echo "<br>";
            echo "Codigo: ".$reg['codigo']."<br>";
            echo "Nombre del Curso: ".$reg['nombrecurso']."<br>";
            echo "<br>";
            echo "<hr>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>