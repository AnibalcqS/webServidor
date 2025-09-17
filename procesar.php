<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //recibir la información

    $nombre = $_POST["nombre"];

    $apellido = $_POST["apellido"];

    var_dump($_POST);

    //procesar la información

    $nombre = strtoupper($nombre);

    $apellido = strtolower($apellido);

    //enviar la respuesta

    echo "<h1>Hola $nombre</h1>";

    echo "<h2>Tu apellido es: $apellido</h2>";

} 

 

?>