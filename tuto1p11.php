<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 11</title>
</head>
<body>
    <h1>Solución punto 11</h1>
    <?php
        // ejemplo
        // if (isset($_REQUEST['check1']))
        // {
        // $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
        // echo "La suma es:".$suma."<br>";
        // }
        // if (isset($_REQUEST['check2']))
        // {
        // $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
        // echo "La resta es:".$resta;
        // }

        $x = 0;
        if (isset($_REQUEST['check1']))
        {
            $x++;
        }
        if (isset($_REQUEST['check2']))
        {
            $x++;
        }
        if (isset($_REQUEST['check3']))
        {
            $x++;
        }
        if (isset($_REQUEST['check4']))
        {
            $x++;
        }

        echo  $_REQUEST['nombre'];
        echo " practica $x deportes";
    ?>
</body>
</html>