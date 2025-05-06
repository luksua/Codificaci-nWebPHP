<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 25</title>
</head>
<body>
    <h1>Solución punto 25</h1>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        mysqli_query($conexion, "UPDATE cursos set nombrecurso='$_REQUEST[cursonuevo]' where nombrecurso='$_REQUEST[cursoviejo]'") or die("Problemas en el select: ".mysqli_error($conexion));
        echo "El nombre del curso fue modificado con exito";
    ?>
</body>
</html>