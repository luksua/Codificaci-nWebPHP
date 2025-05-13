<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 42</title>
</head>
<body>
    <h1>Solución punto 42</h1>
    <?php
        $fecha = date("d/m/y");
        $hora = date("h:i:s");
        $ar=fopen("quejas.txt","a") or die("Problemas en la creacion");
        fputs($ar,"Queja hecha por: $_REQUEST[nombre]");
        fputs($ar, "\n");
        fputs($ar,"La queja fue realizada a las $hora del día $fecha: ");
        fputs($ar, "\n");
        fputs($ar,"'$_REQUEST[queja]'");
        fputs($ar,"\n");
        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";

        header("Location: tuto3p42form1.php?success=1");
        exit;
    ?>
</body>
</html>    