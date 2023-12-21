<?php
//Configurar la ruta del include y descomentar
include('/config.php');

//Usamos phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/vendor/phpmailer/autoload.php';


if ($_POST) {
    // Obtener y filtrar datos del formulario
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = htmlspecialchars($_POST['message']);
    $addressee = 'contacto@urielwebstudio.online';

    // Validar que todos los campos estén presentes y válidos
    if ($nombre && $email && $subject && $message) {
        // Configurar el envío de correo
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_user;
        $mail->Password   = $smtp_pass;
        $mail->SMTPSecure = $smtp_secure ? 'tls' : '';
        $mail->Port       = $smtp_port;

        // Resto de la configuración del correo...
        
        // Configurar los destinatarios, asunto, cuerpo del mensaje, etc.
        $mail->setFrom($email, $nombre);
        $mail->addAddress($addressee);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        try {
            // Envía el correo
            $mail->send();
            var_dump($mail);
            header('Location: index.html'); // Redirigir después del envío exitoso
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
