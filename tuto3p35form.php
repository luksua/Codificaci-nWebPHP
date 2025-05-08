<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 35</title>
</head>
<body>
    <h1>Solución punto 35</h1>
    <h1>EL PAÍS</h1>
    <?php
        if (isset($_COOKIE['noticia'])){
            if ($_COOKIE['noticia']=="titular1"){
            echo "<h3>Noticias políticas:</h3>";
            echo "Petro defiende su política de seguridad en plena ola de atentados contra policías y militares: “No hay un caos de violencia”";
            }elseif ($_COOKIE['noticia']=="titular2"){
                echo "<h3>Noticias económicas:</h3>";
                echo "Los aranceles de Trump dan un zarpazo a las cuentas de las empresas de Estados Unidos";
            }elseif ($_COOKIE['noticia']=="titular3"){
                echo "<h3>Noticias deportivas:</h3>";
                echo "El Real Madrid se lleva el Clásico y deja al Barcelona en la cuerda floja";
            }
        } else {
            echo "<h2>Últimas noticias</h2>";
            echo "<h3>Noticias políticas:</h3>";
            echo "Petro defiende su política de seguridad en plena ola de atentados contra policías y militares: “No hay un caos de violencia”";
            echo "<br>";
            echo "<h3>Noticias económicas:</h3>";
            echo "Los aranceles de Trump dan un zarpazo a las cuentas de las empresas de Estados Unidos";
            echo "<br>";
            echo "<h3>Noticias deportivas:</h3>";
            echo "El Real Madrid se lleva el Clásico y deja al Barcelona en la cuerda floja";
        }
    ?>
    <br><br><hr><br>        
    <form action="tuto3p35.php" method="post">
        Seleccione qué tipo de titular desea ver seguidamente: <br>
        <input type="radio" name="opcion" value="titular1">Noticia política
        <input type="radio" name="opcion" value="titular2">Noticia económica
        <input type="radio" name="opcion" value="titular3">Noticia deportiva
        <input type="radio" name="opcion" value="desuscribirse">Desuscribirse
        <br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>