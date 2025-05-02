<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 24</title>
</head>
<body>
    <h1>Solución punto 24</h1>
    <?php
        // ejemplo
        // $conexion=mysqli_connect("localhost","root","","base1") or
        // die("Problemas con la conexión");
        // mysqli_query($conexion,"delete from alumnos") or
        // die("Problemas en el select:".mysqli_error($conexion));
        // echo "Se efectuó el borrado de todos los alumnos.";
        // mysqli_close($conexion);

        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        mysqli_query($conexion,"delete from cursos") or die("Problemas en el select: ".mysqli_error($conexion));
        echo "Se efectuó el borrado de todos los cursos.";
        mysqli_close($conexion);
    ?>
</body>
</html>