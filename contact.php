<?php
//Configurar la ruta del include y descomentar
include_once('../config.php');

//once para que no se incluya más de una vez :D
require_once './vendor/autoload.php';
//Usamos phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

var_dump($_SERVER['REQUEST_METHOD']);
if ($_POST) {
    // Obtener y filtrar datos del formulario
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = htmlspecialchars($_POST['message']);
    $addressee = 'contacto@urielwebstudio.online';

    // Validar que todos los campos estén presentes y válidos
    if ($nombre && $email && $subject && $message) {
       
        $mail = new PHPMailer(true);
        try {
            echo "Entró bien piola al try\n";
            // Configurar el envío de correo
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host       = $smtp_host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtp_user;
            $mail->Password   = $smtp_pass;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
            $mail->Port       = $smtp_port;
    
            // Resto de la configuración del correo...
            echo "Esto es antes del send()\n";
            // Configurar los destinatarios, asunto, cuerpo del mensaje, etc.
            $mail->setFrom($email, $nombre);
            $mail->addAddress($addressee);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            // Envía el correo
            if($mail->send()){
                echo "Que hace";
                header('Location: index.php'); // Redirigir después del envío exitoso
            } else{
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo '<p>An error occurred: ' . $e->getMessage() . '</p>';
        }
    } else {
        echo '<p>Invalid form data</p>';
    }
} else {
    echo '<p>Form not submitted</p>';
}
?>
