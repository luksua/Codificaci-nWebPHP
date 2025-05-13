<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto41</title>
</head>

<body>
    <?php
    if (is_numeric($_REQUEST["dia"]) && is_numeric($_REQUEST["mes"]) && is_numeric($_REQUEST["ano"])) {
        if (checkdate($_REQUEST["mes"], $_REQUEST["dia"], $_REQUEST["ano"])) {
            $conexion = mysqli_connect("localhost", "root", "", "base1")
            or die("Error de conexión: " . mysqli_connect_error());

            $fechanac = "$_REQUEST[ano]-$_REQUEST[mes]-$_REQUEST[dia]";

            mysqli_query($conexion, "insert into alumnos(nombre, mail, codigocurso, fechanac) values ('$_REQUEST[nombrealumno]', '$_REQUEST[mail]', '$_REQUEST[codigocurso]', '$fechanac')") or
            die("Problemas en el insert." . mysqli_error($conexion));
        
            mysqli_close($conexion);
        
            echo "El alumno fue dado de alta.";
        } else {
            echo "La fecha ingresada no es válida";
        }
    } else {
        echo "Ingrese valores numéricos válidos";
    }
    ?>
    </body>
</html>