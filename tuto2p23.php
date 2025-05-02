<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 23</title>
</head>
<body>
    <h1>Solución punto 23</h1>
    <?php
        // ejemplo
        // $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        // $registros=mysqli_query($conexion, "select codigo from alumnos
        // where mail='$_REQUEST[mail]'") or die("Problemas en el select:".mysqli_error($conexion));
        // if ($reg=mysqli_fetch_array($registros))
        // {
        //     mysqli_query($conexion,"delete from alumnos where
        //     mail='$_REQUEST[mail]'") or
        //     die("Problemas en el select:".mysqli_error($conexion));
        //     echo "Se efectuó el borrado del alumno con dicho mail.";
        // }
        // else
        // {
        //     echo "No existe un alumno con ese mail.";
        // }
        // mysqli_close($conexion);

        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion, "select codigo from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or die("Problemas en el select: ".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
            mysqli_query($conexion,"delete from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            echo "Se efectuó el borrado del curso.";
        }
        else
        {
            echo "No existe un curso con ese nombre.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>