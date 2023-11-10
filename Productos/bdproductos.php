<?php
$_servidor = 'localhost';
$_usuario = 'root';
$_contrasena = 'medac';
$_baseDatos = 'productos';

$conexion = new mysqli($_servidor,$_usuario,$_contrasena,$_baseDatos) or die('Error de conexion');
?>