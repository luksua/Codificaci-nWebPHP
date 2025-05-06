<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 15</title>
</head>
<body>
    <h1>Solución punto 15</h1>
    <?php
        // ejemplo
        // $ar=fopen("datos.txt","a") or
        // "a" (lo crea o si ya existe el archivo lo abre para añadir datos al final), "w" (crea el archivo de texto, si existe borra su contenido) y la última forma de apertura del archivo es "r" (abre el archivo para su lectura)
        // die("Problemas en la creacion");
        // fputs($ar,$_REQUEST['nombre']);
        // fputs($ar,"\n");
        // fputs($ar,$_REQUEST['comentarios']);
        // fputs($ar,"\n");
        // fputs($ar,"--------------------------------------------------------");
        // fputs($ar,"\n");
        // fclose($ar);
        // echo "Los datos se cargaron correctamente.";

        $ar=fopen("pedidos.txt","a") or
        die("Problemas en la creacion");
        fputs($ar,$_REQUEST["nombre"]);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST["direccion"]);
        fputs($ar, "\n");
        fputs($ar, "\n");

        if (isset($_REQUEST["check1"])){
            fputs($ar, "Jamón y queso: ");
            fputs($ar, $_REQUEST["cantidad"]);
            fputs($ar, "\n");
        }
        
        if (isset($_REQUEST["check2"])){
            fputs($ar, "Napolitanas: ");
            fputs($ar, $_REQUEST["cantidad2"]);
            fputs($ar, "\n");
        }

        if (isset($_REQUEST["check3"])){
            fputs($ar, "Mozzarella: ");
            fputs($ar, $_REQUEST["cantidad3"]);
            fputs($ar, "\n");
        }

        
        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";
?>

</body>
</html>