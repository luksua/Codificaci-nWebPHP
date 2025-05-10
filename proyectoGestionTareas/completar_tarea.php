<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ct</title>
</head>
<body>
    <?php
        session_start();
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion') or die("Problemas con la conexión");
        $id_tarea = $_REQUEST['id'];
        $tarea = "UPDATE tareas SET completada = 1 WHERE id = '$id_tarea' AND usuario_id = '".$_SESSION['usuario_id']."'";
        mysqli_query($conexion, $tarea) or die("Problemas al actualizar la tarea: " . mysqli_error($conexion));
        mysqli_close($conexion);
        header("Location: tareas.php");
        exit;
    ?>
</body>
</html>
