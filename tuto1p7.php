<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 7</title>
</head>
<body>
    <h1>Solución punto 7</h1>
    <?php
        // if (Condicion 1)
        // {
        //     Instrucción a1;
        //     Instrucción a2;
        // }
        // elseif (Condicion 2)
        // {
        //     Instrucción b1;
        //     Instrucción b2;
        // }
        // else
        // {
        //     Instrucción c1;
        //     Instrucción c2;
        // }

        // ejemplo 1
        // $valor=rand(1,10);
        // echo "El valor sorteado es $valor<br>";
        // if ($valor<=5)
        // {
        //     echo "Es menor o igual a 5";
        // }
        // else
        // {
        //     echo "Es mayor a 5";
        // }

        // ejemplo 2
        // $valor=rand(1,100);
        // echo "El valor sorteado es $valor<br>";
        // if ($valor<=9)
        // {
        // echo "Tiene un dígito";
        // }
        // elseif ($valor<100)
        // {
        // echo "Tiene 2 dígitos";
        // }
        // else
        // {
        // echo "Tiene 3 dígitos";
        // }

        $valor = rand(1,3);
        if ($valor == 1)
        {
            echo "El valor sorteado es uno<br>";
        }
        elseif ($valor == 2)
        {
            echo "El valor sorteado es dos<br>";
        }
        else
        {
            echo "El valor sorteado es tres<br>";
        }
    ?>
</body>
</html>