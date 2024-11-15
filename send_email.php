<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombreapellido = $_POST['nombreapellido'];
    $correoelectronico = $_POST['correoelectronico'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $contacto = $_POST['contacto'];
    $horario = $_POST['horario'];
    $novedades = isset($_POST['novedades']) ? 'Sí' : 'No';

    // Configuración del correo
    $to = "cirmdp@gmail.com";
    $subject = "Nuevo mensaje de contacto de " . $nombreapellido;
    $body = "Nombre y Apellido: " . $nombreapellido . "\n";
    $body .= "Correo Electrónico: " . $correoelectronico . "\n";
    $body .= "Teléfono: " . $telefono . "\n";
    $body .= "Mensaje: " . $mensaje . "\n";
    $body .= "Preferencia de contacto: " . $contacto . "\n";
    $body .= "Horario preferido: " . $horario . "\n";
    $body .= "Recibir novedades: " . $novedades . "\n";

    $headers = "From: " . $correoelectronico;

    // Enviar correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
