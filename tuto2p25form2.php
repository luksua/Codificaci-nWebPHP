<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 25</title>
</head>
<body>
    <h1>Solución punto 25</h1>
    <!-- ?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select * from alumnos where mail='$_REQUEST[mail]'") or die("Problemas en el select:".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
    ?
            <form action="tuto2p25.php" method="post">
                Ingrese nuevo mail:
                <input type="text" name="mailnuevo" value="?php echo $reg['mail'] ?">
                <br>
                <input type="hidden" name="mailviejo" value="?php echo $reg['mail'] ?">  -->
                <!-- aqui el tipo 'hidden' no se ve en el formulario pero si se envia, para poder actualizarlo en la siguiente pag, se necesitan los dos campos. -->
                <!-- <input type="submit" value="Modificar">
            </form>
    ?php
        }
        else
        {
            echo "No existe alumno con dicho mail";
        }
    ? -->

    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select * from cursos where codigo='$_REQUEST[codigo]'") or die("Problemas en el select: ".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
    ?>
            <form action="tuto2p25.php" method="post">
                Ingrese el nuevo nombre del curso:
                <input type="text" name="cursonuevo" value="<?php echo $reg['nombrecurso'] ?>">
                <br>
                <input type="hidden" name="cursoviejo" value="<?php echo $reg['nombrecurso'] ?>"> <br>
                <!-- aqui el tipo 'hidden' no se ve en el formulario pero si se envia, para poder actualizarlo en la siguiente pag, se necesitan los dos campos. -->
                <input type="submit" value="Modificar">
            </form>
    <?php
        }
        else
        {
            echo "No existe un curso con dicho codigo";
        }
    ?>
</body>
</html>