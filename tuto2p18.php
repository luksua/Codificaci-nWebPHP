<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 18</title>
</head>
<body>
    <h1>Solución punto 18</h1>
    <?php
        // funciones ejemplos
        // function mostrartitulo($men)
        // {
        //     echo "<h1 style=\"text-align:center\">";
        //     echo $men;
        //     echo "</h1>";
        // }
        // mostrartitulo("Primer titulo");
        // echo "<br>";
        // mostrartitulo("Segundo segundo");

        // function retornarpromedio($valor1,$valor2)
        // {
        //     $pro=$valor1/$valor2;
        //     return $pro;
        // }
        // $v1=100;
        // $v2=50;
        // $p=retornarpromedio($v1,$v2);
        // echo $p;

        function validarcontra($p1, $p2)
        {
            if ($p1==$p2)
            {
                return "Bienvenido al sistema";
            }
            else
            {
                return "Las dos contraseñas son distintas. Intentelo nuevamente";
            }
        }
        
        echo validarcontra($_REQUEST['pass1'], $_REQUEST['pass2']);
    ?>
</body>
</html>