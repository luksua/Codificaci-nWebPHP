<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 8</title>
</head>
<body>
<h1>Solución punto 8</h1>
    <?php
        // ejemplo for
        // for($f=1;$f<=100;$f++)
        // {
        //  echo $f;
        //  echo "<br>";
        // }

        // ejemplo while
        // $valor=rand(1,100);
        // $inicio=1;
        // while($inicio<=$valor)
        // {
        //  echo $inicio;
        //  echo "<br>";
        //  $inicio++;
        // }

        // ejemplo do/while
        // do
        // {
        // [Instrucciones];
        // } while (condición);

        echo '<h2>Solución con for</h2>';
        $x = 1;
        for ($i=2; $i<=20; $i=$i+2)
        {
            echo "2 x $x = $i";
            echo "<br>";
            $x++;
        }

        echo '<h2>Solución con while</h2>';
        $x = 1;
        $i = 2;
        while ($x<=10)
        {
            echo "2 x $x = $i";
            echo "<br>";
            $x++;
            $i = $i + 2;
        }

        echo '<h2>Solución con do/while</h2>';
        $x = 1;
        $i = 2;
        do
        {
            echo "2 x $x = $i";
            echo "<br>";
            $x++;
            $i = $i + 2;
        } while ($x<=10);
    ?>
</body>
</html>