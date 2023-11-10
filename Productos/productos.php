<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'bdproductos.php' ?>
    <?php require '../Funciones/depurar.php' ?>
</head>

<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_producto = depurar($_POST["producto"]);
        $temp_precio = depurar($_POST["precio"]);
        $temp_descripcion = depurar($_POST["descripcion"]);
        $temp_cantidad = depurar($_POST["cantidad"]);

        if(strlen($temp_producto) == 0) {
            $err_producto = "El campo es obligatorio";
        } else {
            $regex = "/^[a-zA-Z0-9\s]{0,40}$/";
            if(!preg_match($regex, $temp_producto)) {
                $err_producto = "Solo puede contener carácteres y números y cómo máximo 40 carácteres";
            } else {
                $nombreProducto = $temp_producto;
            }
        }

        if(strlen($temp_precio) == 0) {
            $err_precio = "El campo es obligatorio";
        } else {
            $precio = $temp_precio;
        }

        if(strlen($temp_descripcion) == 0) {
            $err_descripcion = "El campo es obligatorio";
        } else {
            $descripcion = $temp_descripcion;
        }

        if(strlen($temp_cantidad) == 0) {
            $err_cantidad = "El campo es obligatorio";
        } else {
            $cantidad = $temp_cantidad;
        }

        $sql = "INSERT INTO productos(nombreProducto, precio, descripcion, cantidad) VALUES('$nombreProducto', '$precio', '$descripcion', '$cantidad')";

        $conexion -> query($sql);
    }
    ?>
    <div class="container">
        <h1>Productos</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Producto</label>
                <input type="text" name="producto" class="form-control"><?php if(isset($err_producto)) echo $err_producto ?>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input type="text" name="precio" class="form-control"><?php if(isset($err_precio)) echo $err_precio ?>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input type="text" name="descripcion" class="form-control"><?php if(isset($err_descripcion)) echo $err_descripcion ?>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input type="text" name="cantidad" class="form-control"><?php if(isset($err_cantidad)) echo $err_cantidad ?>
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
    <?php
    if(isset($nombreProducto) and isset($precio) and isset($cantidad) and isset($descripcion)) {
        echo "exito";


    }
    ?>
</body>
</html>