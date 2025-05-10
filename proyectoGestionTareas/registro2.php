<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php 
        // Conexión a la base de datos 
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion') or die("Problemas con la conexión"); 
        if (!empty($_REQUEST['nombre']) && !empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena']) && !empty($_REQUEST['contrasena2'])) {
            $correos = mysqli_query($conexion, "SELECT correo from usuarios");
            $c = mysqli_fetch_array($correos);
            if ($_REQUEST['correo']<>$c) {
                    if ($_REQUEST['contrasena']<>$_REQUEST['contrasena2']){
                        echo("Las contraseñas no coinciden");
                    } else {
                        $nombre = $_REQUEST['nombre']; 
                        $correo = $_REQUEST['correo']; 
                        $contrasena = $_REQUEST['contrasena'];

                        // Hashear la contraseña 
                        $hash = password_hash($contrasena, PASSWORD_DEFAULT); 
                        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)") or die("Problemas en el select ".mysqli_error($conexion));

                        $stmt->bind_param("sss", $nombre, $correo, $hash);

                        if ($stmt->execute()) { 
                            echo "Usuario registrado con éxito.";
                            echo "<script>
                                    setTimeout(function() {
                                        window.location.href = 'login.php';
                                    }, 2000);
                                </script>";
                        } else { 
                            echo "Error: " . $stmt->error; 
                        } 
                        $stmt->close(); 
                    }
            }
        } else {
            echo "Porfavor ingrese todos los campos";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 2000);
                    </script>";
        }
    ?>
    <br>
    <a href="login.php">Iniciar Sesión</a>
</body>
</html>