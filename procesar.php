<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include_once "conexion.php";

    $conexion = new Conexion();

   $conn= $conexion->conectar();

    //recibir la información

    $nombre = $_POST["nombre"];

    $apellido = $_POST["apellido"];

    $telefono = $_POST["telefono"];

    $direccion = $_POST["direccion"];

    $email = $_POST["email"];

    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO user (name, apellido, telefono, direccion, email, mensaje) VALUES (?, ?, ?, ?, ?,?)";

    $stmt = $conn->prepare($sql);

   

    $stmt->bind_param("ssssss", $nombre, $apellido,$telefono, $direccion, $email, $mensaje);

    $stmt->execute();

    if($stmt->affected_rows > 0){

        //echo "Usuario agregado correctamente";

        header("Location: index.php");

    } else {

        echo "Error al agregar el usuario";

    }

} 

 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require './email/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kehill1995@gmail.com';                     //SMTP username
    $mail->Password   = 'kjdmprpmitkbivlj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kehill1995@gmail.com', 'Anibal');
    $mail->addAddress('$nombre,$apellido, $email,$Mensaje');     //Add a recipient
   
    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ejemplo';
    $mail->Body    = $Mensaje;
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}