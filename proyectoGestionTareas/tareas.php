<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>
    <h1>Panel de tareas</h1>
    <?php
        //Listado de tareas
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion') or die("Problemas con la conexión");
        session_start();
        $ta = mysqli_query($conexion, "SELECT * FROM tareas WHERE usuario_id = '".$_SESSION['usuario_id']."'") or die("Problemas en el select: ".mysqli_error($conexion));

        $tareas = mysqli_query($conexion, "SELECT * FROM tareas WHERE usuario_id = '".$_SESSION['usuario_id']."'") or die("Problemas en el select: ".mysqli_error($conexion));

        if (!$t = mysqli_fetch_array($ta)){
            echo "<h2>No hay tareas registradas</h2>";
        } else {
            echo "<h2>Tareas registradas:</h2>";
        }
        $id = 1;
    ?>
    <table style="border: 1px solid black">
        <tr>
            <th style="border: 1px solid black; padding: 8px;">Id_Tarea</th>
            <th style="border: 1px solid black; padding: 8px;">Id_Usuario</th>
            <th style="border: 1px solid black; padding: 8px;">Titulo</th>
            <th style="border: 1px solid black; padding: 8px;">Descripcion</th>
            <th style="border: 1px solid black; padding: 8px;">Fecha creacion</th>
            <th style="border: 1px solid black; padding: 8px;">Estado</th>
            <th style="border: 1px solid black; padding: 8px;">Editar</th>
            <th style="border: 1px solid black; padding: 8px;">Eliminar</th>
            <th style="border: 1px solid black; padding: 8px;">Marcar como completa</th>
        </tr>

    <?php

    while ($tarea = mysqli_fetch_array($tareas)) {
        ?>
        <tr>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo $tarea['id'] ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo $tarea['usuario_id'] ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo $tarea['titulo'] ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo $tarea['descripcion'] ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo $tarea['fecha_creacion'] ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php 
        if ($tarea['completada'] == 0) {
            echo 'Incompleta';
        } else {
            echo 'Completa';
        }
    ?>
        </td>
        <td style="border: 1px solid black; padding: 8px;"> <a href="editar_tarea.php?id=<?php echo $tarea['id']; ?>"><button>Editar</button></a> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo "<a href='eliminar_tarea.php?id=$tarea[id]'><button>Eliminar</button></a>" ?> </td>
        <td style="border: 1px solid black; padding: 8px;"> <?php echo "<a href='completar_tarea.php?id=$tarea[id]'><button>Marcar</button></a>" ?> </td>
<?php
    }
?>
    </table>
            <hr>
    <?php
        
        mysqli_close($conexion);
    ?>
    <br>
    <form action="nueva_tarea.php" method="post">
        <input type="submit" value="Añadir nueva tarea">
    </form>
    <br>
    <a href="logout.php">Cerrar Sesión</a>
    
</body>
</html>