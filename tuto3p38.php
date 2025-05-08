<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 38</title>
</head>
<body>
    <h1>Solución punto 38</h1>
    <?php
        // function cabeceraPagina($tit) { 
        //     echo "<h1 style=\"width:100%;background:#ffff00;text-
        //     aling:center\">$tit</h1>";
        // }
        // function piePagina($tit){
        //     echo "<p style=\"width:100%;background:#cccccc;text-
        //     aling:center\">$tit</p>";
        // }

        function retornarConexion() { 
            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "SELECT alu.codigo, nombre, mail, cur.nombrecurso from alumnos as alu join cursos as cur on alu.codigocurso = cur.codigo") or die("Problemas en el select: " . mysqli_error($conexion));
            mysqli_close($conexion);
            return $registros;
        }
    ?>
</body>
</html>