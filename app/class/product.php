<?php

class Producto {

    private $nombre;
    private $precio;

    public function __construct($nombre = NULL, $precio = NULL)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function addProduct($nombre, $precio){
        $bd = new Db();
        $sql = "INSERT INTO product (nombre, precio) VALUES ('$nombre', $precio)";
        $bd->ejecutar($sql);
    }

}

?>