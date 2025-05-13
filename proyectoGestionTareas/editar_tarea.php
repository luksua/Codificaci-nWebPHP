<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <?php
        session_start();
        $conexion = mysqli_connect("localhost", "root", "", "gestion") or die("Problemas con la conexión");

        $tareas = mysqli_query($conexion, "SELECT * FROM tareas WHERE id = '" . $_REQUEST['id'] . "' AND usuario_id = '" . $_SESSION['usuario_id'] . "'") or die("Problemas en el select: " . mysqli_error($conexion));
        if ($tarea = mysqli_fetch_array($tareas)) {
            if (isset($_REQUEST['nuevotitulo'], $_REQUEST['nuevadescripcion'], $_REQUEST['id'])) {
                mysqli_query($conexion, "UPDATE tareas SET titulo = '" . $_REQUEST['nuevotitulo'] . "', descripcion = '" . $_REQUEST['nuevadescripcion'] . "' WHERE id = '" . $_REQUEST['id'] . "' AND usuario_id = '" . $_SESSION['usuario_id'] . "'") or die("Problemas en el update: " . mysqli_error($conexion));
                echo "Tarea actualizada con éxito.<br>";
                
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'tareas.php';
                    }, 2000);
                    </script>";
            } else {
    ?>
                <form action="editar_tarea.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
                    Ingrese el nuevo titulo de la tarea:
                    <input type="text" name="nuevotitulo" value="<?php echo $tarea['titulo']; ?>"><br>
                    Ingrese la nueva descripción de la tarea: <br>
                    <textarea name="nuevadescripcion"><?php echo $tarea['descripcion']; ?></textarea><br><br>
                    <input type="submit" value="Actualizar tarea">
                </form>
        
    <?php
            }
        } else {
            echo "No existe tarea con dicho titulo.";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'tareas.php';
                    }, 2000);
                    </script>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>