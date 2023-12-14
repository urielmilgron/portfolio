<?php
if($_POST) {
    $nombre = "";
    $email = "";
    $subject = "";
    $message = "";
    $addressee = "urielmilgron18@gmail.com"
    
    if(isset($_POST['nombre'])) {
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['email'])) {
    	$email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
    	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    if(isset($_POST['subject'])) {
    	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['message'])) {
    	$message = htmlspecialchars($_POST['message']);
    }
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
    
    if(mail($addressee, $subject, $message, $headers)) {
    	echo "<p>Thank you for contacting us, $nombre. You will get a reply within 24 hours.</p>";
    } else {
    	echo '<p>We are sorry but the email did not go through.</p>';
    }
    
} else {
    echo '<p>Something went wrong</p>';
}
?>