<?php

class Producto {
    public $id;
    public $nombreProducto;
    public $precio;
    public $descripcion;
    public $cantidad;
    public $imagen;

    public function __construct($id, $nombreProducto, $precio, $descripcion, $cantidad, $imagen) {
        $this->id = $id;
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
        $this->imagen = $imagen;
    }


    public function mostrar() {
        echo $this->nombreProducto;
        echo $this->precio;
        echo $this->descripcion;
        echo $this->cantidad;
        echo $this->imagen;
    }
}

?>
