<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'bdproductos.php' ?>  
</head>

<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contrasena</label>
                <input type="password" name="contrasena" class="form-control">
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows == 0) {
            echo "El usuario no existe";
        } else {
            while ($fila = $resultado->fetch_assoc()) {
                $contrasena_cifrada = $fila["contrasena"];
            }

            $acceso_valido = password_verify($contrasena, $contrasena_cifrada);
            if ($acceso_valido) {
                session_start();
                $_SESSION["usuario"] = $usuario;
                header('Location: principal.php');
            } else {
                echo "Contraseña Incorrecta";
            }
        }
    }
    ?>
</body>

</html>