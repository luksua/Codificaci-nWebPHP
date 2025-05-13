<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <?php
        session_start();
        $conexion = mysqli_connect('localhost', 'root', '', 'gestion') or die("Problemas con la conexión"); 
        if (!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena'])) {
            $correo = $_REQUEST['correo']; 
            $contrasena = $_REQUEST['contrasena']; 
            $stmt = $conexion->prepare("SELECT id, nombre, contrasena FROM usuarios WHERE correo = ?"); 
            $stmt->bind_param("s", $correo); 
            $stmt->execute(); 
            $result = $stmt->get_result();

            if ($result && $row = $result->fetch_assoc()) { 
                if (password_verify($contrasena, $row['contrasena'])) { 
                    // Contraseña válida
                    $_SESSION['usuario_id'] = $row['id']; 
                    $_SESSION['nombre'] = $row['nombre'];
                    echo "Login exitoso. Bienvenido, " . $_SESSION['nombre']; 
                    // Redirigir a la página de tareas 
                    header("Location: tareas.php"); 
                    exit; 
                } else { 
                    echo "Contraseña incorrecta."; 
                } 
            } else { 
                echo "Usuario no encontrado."; 
            } 
            $stmt->close(); 
        } else {
            echo "Porfavor ingrese todos los campos";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 2000);
                    </script>";
        }
    ?>
</body>
</html>