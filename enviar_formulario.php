<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $opinion = $_POST['opinion'];

    // Dirección de correo a la que se enviarán los datos
    $destinatario = "alesandro3644@gmail.com";
    
    // Asunto del correo
    $asuntoCorreo = "Nuevo mensaje de contacto: " . $asunto;
    
    // Cuerpo del correo
    $cuerpo = "Has recibido un nuevo mensaje de contacto.\n\n";
    $cuerpo .= "Nombre: " . $nombre . "\n";
    $cuerpo .= "Correo electrónico: " . $correo . "\n";
    $cuerpo .= "Asunto: " . $asunto . "\n";
    $cuerpo .= "Mensaje: " . $mensaje . "\n";
    $cuerpo .= "Testimonio / Opinión: " . $opinion . "\n";
    
    // Cabeceras del correo
    $cabeceras = "From: " . $correo . "\r\n";
    $cabeceras .= "Reply-To: " . $correo . "\r\n";
    
    // Enviar el correo
    if (mail($destinatario, $asuntoCorreo, $cuerpo, $cabeceras)) {
        echo "Mensaje enviado correctamente";
    } else {
        echo "Error al enviar el mensaje";
    }
} else {
    echo "Método no permitido";
}
?>
