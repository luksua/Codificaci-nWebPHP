<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 44</title>
</head>
<body>
    <h1>Solución punto 44</h1>
    <form action="tuto3p44form2.php" method="post">
        Ingrese el nombre:
        <input type="text" name="nombrealumno"><br>
        Ingrese el mail:
        <input type="text" name="mail"><br>
        Ingrese la fecha de nacimiento:
        <select name="dia">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="mes">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                switch ($i) {
                    case 1:
                        echo "<option value='$i'>Enero</option>";
                        break;
                    case 2:
                        echo "<option value='$i'>Febrero</option>";
                        break;
                    case 3:
                        echo "<option value='$i'>Marzo</option>";
                        break;
                    case 4:
                        echo "<option value='$i'>Abril</option>";
                        break;
                    case 5:
                        echo "<option value='$i'>Mayo</option>";
                        break;
                    case 6:
                        echo "<option value='$i'>Junio</option>";
                        break;
                    case 7:
                        echo "<option value='$i'>Julio</option>";
                        break;
                    case 8:
                        echo "<option value='$i'>Agosto</option>";
                        break;
                    case 9:
                        echo "<option value='$i'>Septiembre</option>";
                        break;
                    case 10:
                        echo "<option value='$i'>Octubre</option>";
                        break;
                    case 11:
                        echo "<option value='$i'>Noviembre</option>";
                        break;
                    case 12:
                        echo "<option value='$i'>Diciembre</option>";
                        break;
                }
            }
            ?>
        </select>

        <select name="ano">
            <?php
            for ($i = 2015; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br>
        Seleccione el curso del alummo:
        <select name="codigocurso">
        <?php
        $conexion=mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select codigo,nombrecurso from
        cursos") or
        die("Problemas en el select:".mysqli_error($conexion));
        while ($reg=mysqli_fetch_array($registros))
        {
        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }
        ?>
        </select>
        <br><br>
        <input type="submit" value="Registrar">
    </form>
    <br>
    <a href="tuto3p44.php">Ver estudiantes dados de alta.</a>
</body>
</html>     