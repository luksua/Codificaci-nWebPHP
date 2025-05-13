<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 42</title>
</head>
<body>
    <h1>Solución punto 42</h1>
    <form action="tuto3p43.php" method="post">
        Ingrese una fecha:
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
            for ($i = 2025; $i >= 2000; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Validar">
    </form>
</body>
</html>    