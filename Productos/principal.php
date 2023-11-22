<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <?php require 'bdproductos.php' ?>
    <?php require '../Productos/util/producto.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
</head>
<body>
    <?php
    session_start();
    $usuario = $_SESSION["usuario"];
    ?>
    <h1>Bienvenido Álvaro</h1>  
    <h3>Productos disponibles</h3>

    
</body>
</html>