<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 37</title>
</head>
<body>
    <h1>Solución punto 37</h1>
    <?php
        $conexion = mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion,"SELECT * from alumnos where mail = '$_REQUEST[mail]'") or die("Problemas en el select:".mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)){
            session_start();
            $_SESSION['nombre']=$reg['nombre'];
            echo "Se almacenó la variable de sesión.<br><br>";
        } else {
            echo "El mail no existe en la base de datos";
            exit;
        }
        mysqli_close($conexion);
    ?>
    <a href="tuto3p37.php">Ir a la tercer página donde se recuperará la variable de sesión</a>
</body>
</html>