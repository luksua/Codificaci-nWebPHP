<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 29</title>
</head>
<body>
    <h1>Solución punto 29</h1>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"update alumnos set codigo=$_REQUEST[codigocurso]
        where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        echo "El alumno fue modificado con exito";
    ?>
</body>
</html>