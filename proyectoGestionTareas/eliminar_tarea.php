<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>
    <?php
        session_start();
        $conexion=mysqli_connect("localhost","root","","gestion") or die("Problemas con la conexión");

        $tareas = mysqli_query($conexion, "SELECT * FROM tareas WHERE id = '" . $_REQUEST['id'] . "' AND usuario_id = '" . $_SESSION['usuario_id'] . "'") or die("Problemas en el select: " . mysqli_error($conexion));
        if ($tarea=mysqli_fetch_array($tareas)) {
            mysqli_query($conexion, "DELETE from tareas where  id = '" . $_REQUEST['id'] . "' AND usuario_id = '" . $_SESSION['usuario_id'] . "'") or die("Problemas en el update: " . mysqli_error($conexion));

            echo "Tarea eliminada con éxito.<br>";
                
            header("Location: tareas.php");
        }
    ?>
</body>
</html>