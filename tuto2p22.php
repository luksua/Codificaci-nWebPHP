<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 22</title>
</head>
<body>
    <h1>Solución punto 22</h1>
    <?php
        // $conexion=mysqli_connect("localhost","root","","base1") or
        // die("Problemas con la conexión");
        // $registros=mysqli_query($conexion,"select codigo,nombre, codigocurso
        // from alumnos where mail='$_REQUEST[mail]'") or
        // die("Problemas en el select:".mysqli_error($conexion));
        // if ($reg=mysqli_fetch_array($registros))
        // {
        // echo "Nombre:".$reg['nombre']."<br>";
        // echo "Curso:";
        // switch ($reg['codigocurso']) {
        // case 1:echo "PHP";
        // break;
        // case 2:echo "ASP";
        // break;
        // case 3:echo "JSP";
        // break;
        // }
        // }
        // else
        // {
        // echo "No existe un alumno con ese mail.";
        // }
        // mysqli_close($conexion);

        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select codigo, nombre, mail, codigocurso
        from alumnos where nombre ='$_REQUEST[nombre]'") or die("Problemas en el select: ".mysqli_error($conexion));
        while ($reg=mysqli_fetch_array($registros))
        {
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Curso: ";
            switch ($reg['codigocurso']) {
                case 1:echo "PHP";
                break;
                case 2:echo "ASP";
                break;
                case 3:echo "JSP";
                break;
            }
            echo "<br>";
            echo "<hr>";
        }
        if ($reg != mysqli_fetch_array($registros))
        {
            echo "No existe un alumno con ese nombre.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>