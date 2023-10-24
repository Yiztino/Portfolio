<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['Nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['Asunto'];
    $mensaje = $_POST['Mensaje'];
    $to = "osodepeluche@polar.com.mx"; // Correo al que se enviará el mensaje

    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    $email_body = "Has recibido un nuevo mensaje del formulario de contacto de tu sitio web.\n\n".
                  "Nombre: $nombre\n".
                  "Email: $email\n".
                  "Asunto: $asunto\n".
                  "Mensaje:\n$mensaje";

    // Envío del correo
    mail($to,$asunto,$email_body,$headers);
    header("Location: portafolio"); // Redireccionar a esta página después de enviar el correo
    exit();
}
?>
