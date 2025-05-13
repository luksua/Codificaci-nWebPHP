<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion') or die("Problemas con la conexión");
        session_start();
        if (!empty($_REQUEST['titulo']) && !empty($_REQUEST['descripcion'])) {
            $tarea = mysqli_query($conexion, "SELECT * FROM tareas WHERE titulo = '" . $_REQUEST['titulo'] . "' AND usuario_id = '" . $_SESSION['usuario_id'] . "'") or die("Problemas en el select: ".mysqli_error($conexion));
            $tarea = mysqli_fetch_array($tarea);
            if ($_REQUEST['titulo']<>$tarea) {
                $registar = mysqli_query($conexion, "INSERT INTO tareas (titulo, descripcion, fecha_creacion, usuario_id) VALUES ('" . $_REQUEST['titulo'] . "', '" . $_REQUEST['descripcion'] . "', NOW(), '" . $_SESSION['usuario_id'] . "')") 
                or die("Problemas en el select: ".mysqli_error($conexion));
                echo "Tarea registrada con éxito.";
                echo "<script> setTimeout(function() {
                                window.location.href = 'tareas.php';
                            }, 2000);
                    </script>";
            } else {
                echo "Esta tarea ya se encuentra registrada.";
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'nueva_tarea.php';
                    }, 2000);
                    </script>";
            }
        } else {
            echo "Porfavor ingrese todos los campos";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'nueva_tarea.php';
                    }, 2000);
                    </script>";
        }
    ?>
</body>
</html>