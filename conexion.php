<?php

class Conexion

{

    private $host = "localhost";

    private $usuario = "root";

    private $password = "";

    private $baseDatos = "ejemplo";

    public $conexion;

    public $port = 3306;

    function conectar()

    {

        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->baseDatos, $this->port);

        if ($this->conexion->connect_errno) {

            echo "Error al conectar a la base de datos" . $this->conexion->connect_error;

            return null;

        }

        return $this->conexion;

    }

}