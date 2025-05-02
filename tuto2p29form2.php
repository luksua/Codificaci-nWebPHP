<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 29</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select * from alumnos where codigo=$_REQUEST[codigo]") or
        die("Problemas en el select:".mysqli_error($conexion));
        if ($regalu=mysqli_fetch_array($registros))
        {
    ?>
            <form action="tuto2p29.php" method="post">
                Ingrese el nuevo nombre del alumno: 
                <input type="text" name="nuevonombre" value="<?php echo $reg['nombre'] ?>">
                <input type="hidden" name="viejonombre" value="<?php echo $reg['nombre'] ?>"> <br>
                Ingrese el nuevo mail del alumno: 
                <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
                <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
                <br>
                Seleccione el nuevo curso: 
                <select name="codigocurso">
                    <?php
                        $registros=mysqli_query($conexion,"select * from cursos") or die("Problemas en el select:".mysqli_error($conexion));
                        while ($reg=mysqli_fetch_array($registros))
                        {
                            if ($regalu['codigocurso']==$reg['codigo'])
                            {
                                echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
                            }
                            else
                            {
                                echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                            }
                        }
                    ?>
                </select>
                <br><br>
                <input type="submit" value="Modificar">
            </form>
    <?php
        }
        else
            echo "No existe alumno con dicho codigo";
    ?>
</body>
</html>