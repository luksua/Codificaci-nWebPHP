<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 15</title>
</head>
<body>
    <h1>Solución punto 15</h1>
    <!-- Ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        Comentarios:
        <br>
        <textarea name="comentarios" rows="10" cols="40">
        </textarea>
        <br>
        <input type="submit" value="Registrar">
    </form> -->

    <form action="tuto1p15.php" method="post">
        <h3>Ordene su pizza!</h3>
        Nombre:
        <input type="text" name="nombre">
        <br>
        Dirección:
        <input type="text" name="direccion">
        <br>
        <input type="checkbox" name="check1"> Jamón y queso
        <br>
        Cantidad:
        <input type="text" name="cantidad">
        <br>
        <br>
        <input type="checkbox" name="check2"> Napolitana
        <br>
        Cantidad:
        <input type="text" name="cantidad2">
        <br>
        <br>
        <input type="checkbox" name="check3"> Muzzarella
        <br>
        Cantidad:
        <input type="text" name="cantidad3">
        <br>
        <br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>