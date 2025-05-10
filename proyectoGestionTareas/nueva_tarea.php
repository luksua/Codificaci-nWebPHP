<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>
    <h1>Nueva Tarea</h1>
    <form action="nueva_tarea2.php" method="post">
        Ingrese el titulo de la tarea:
        <input type="text" name="titulo"><br>
        Ingrese la descripción de la tarea: <br>
        <textarea name="descripcion"></textarea><br><br>
        <input type="submit" value="Añadir nueva tarea">
    </form>
</body>
</html>