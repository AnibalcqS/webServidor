<?php
// PHPMailer debe ir primero, antes de cualquier código que se ejecute
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Carga Composer autoload (asegúrate de que la ruta sea correcta)
require './email/vendor/autoload.php';

// Verifica que se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conexión a la base de datos
    include_once "conexion.php";
    $conexion = new Conexion();
    $conn = $conexion->conectar();

    // Recibir información del formulario
    $nombre   = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $direccion= $_POST["direccion"];
    $email    = $_POST["email"];
    $mensaje  = $_POST["mensaje"];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO user (name, apellido, telefono, direccion, email, mensaje) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre, $apellido, $telefono, $direccion, $email, $mensaje);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Usuario agregado correctamente.<br>";
    } else {
        echo "Error al agregar el usuario.<br>";
    }

    // Enviar correo con PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'kehill1995@gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kehill1995@gmail.com'; // tu correo
        $mail->Password   = 'ozbl liga xfou wids';       // tu contraseña o app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('kehill1995@gmail.com', 'Tu Nombre');
        $mail->addAddress($email, $nombre);

        $mail->isHTML(true);
        $mail->Subject = 'Registro Exitoso';
        $mail->Body    = "<p>Hola <b>$nombre</b>,</p><p>Gracias por registrarte. Tu mensaje fue:</p><p>$mensaje</p>";

        $mail->send();
        echo "Correo enviado correctamente.";
    } catch (Exception $e) {
        echo "Error al enviar correo: {$mail->ErrorInfo}";
    }
}