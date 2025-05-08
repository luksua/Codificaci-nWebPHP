<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 38</title>
</head>
<body>
    <?php
        // require_once("pagina2.php"); --incluir el contenido de otro archivo
        // cabeceraPagina("Titulo principal de la página");
        // echo "<br><br><center>Este es el cuerpo de la página<br><br></center>";
        // piePagina("Pie de la página");

        require_once("tuto3p38.php");
        $registros=retornarConexion();
        while($reg = mysqli_fetch_array($registros)){
            echo"Código: ".$reg["codigo"] . "<br>";
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Mail: ".$reg['mail']."<br>";
            echo "Curso: ".$reg["nombrecurso"] . "<br>";
            echo "<br>";
        }
    ?>
</body>
</html>