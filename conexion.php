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



if($_SERVER["REQUEST_METHOD"] == "POST"){

    include_once "conexion.php";

    $conexion = new Conexion();

   $conn= $conexion->conectar();

    //recibir la información

    $nombre = $_POST["nombre"];

    $email = $_POST["email"];

    $sql = "INSERT INTO user (name, email) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

   

    $stmt->bind_param("ss", $nombre, $email);

    $stmt->execute();

    if($stmt->affected_rows > 0){

        //echo "Usuario agregado correctamente";

        header("Location: index.php");

    } else {

        echo "Error al agregar el usuario";

    }

} 

 

?>