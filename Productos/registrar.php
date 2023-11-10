<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'bdproductos.php' ?>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_usuario = $_POST["usuario"];
        $temp_contrasena = $_POST["contrasena"];
        $temp_fecha = $_POST["fecha"];
        //Comprobación usuario//
        if (strlen($temp_usuario) == 0) {
            $err_usuario = "Campo obligatorio";
        } else {
            $regex = '/^[a-zA-Z_]{4,12}$/';
            if (!preg_match($regex, $temp_usuario)) {
                $err_usuario = 'Debe tener de 4 a 12 caracteres, solo se aceptan caracteres y "_"';
            } else {
                $usuario = $temp_usuario;
            }
        }
        //Comprobación contraseña
        if (strlen($temp_contrasena) == 0) {
            $err_contrasena = "Campo obligatorio";
        } else {
            $contrasena = password_hash($temp_contrasena, PASSWORD_DEFAULT);
        }
        //Comprobación fecha
        if (strlen($temp_fecha) == 0) {
            $err_fecha = "Campo obligatorio";
        } else {
            $anioActual = date("Y");
            $anioNacimiento = date("Y", strtotime($temp_fecha));

            $edad = $anioActual - $anioNacimiento;


            if ($edad >= 12 and $edad <= 120) {
                $fecha = $temp_fecha;
            } else {
                $err_fecha = "Debes tener entre 12 y 120 años";
            }

        }

        $sql = "INSERT INTO usuarios VALUES('$usuario', '$contrasena', '$fecha')";

        $conexion -> query($sql);
    }
    ?>
    <h1>Registrarse</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control">
            <b>
                <?php if (isset($err_usuario))
                    echo $err_usuario; ?>
            </b>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" name="contrasena" class="form-control">
            <b>
                <?php if (isset($err_contrasena))
                    echo $err_contrasena; ?>
            </b>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control">
            <b>
                <?php if (isset($err_fecha))
                    echo $err_fecha; ?>
            </b>
        </div>
        <input type="submit" value="Registrar" class="btn btn-primary">
    </form>
</body>

</html>