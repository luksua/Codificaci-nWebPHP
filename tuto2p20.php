<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 20</title>
</head>
<body>
    <h1>Punto 20</h1>
    <?php
        // tabla alumnos
        // $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        // mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values('$_REQUEST[nombre]','$_REQUEST[mail]', $_REQUEST[codigocurso])") or die("Problemas en el select".mysqli_error($conexion));
        // mysqli_close($conexion);
        // echo "El alumno fue dado de alta.";

        // tabla cursos
        $conexion = mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        mysqli_query($conexion,"INSERT into cursos(nombrecurso) values ('$_REQUEST[nombrecurso]')") or die("Problemas en el select ".mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El curso fue dado de alta.";
    ?>
</body>
</html>