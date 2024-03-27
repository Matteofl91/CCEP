<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe la opinión del formulario
    $opinion = $_POST['opinion'];

    // Dirección de correo electrónico a la que enviar la opinión
    $destinatario = 'csifcolebega@gmail.com';

    // Asunto del correo electrónico
    $asunto = 'Nueva opinión de un empleado';

    // Cuerpo del correo electrónico
    $mensaje = "Se ha recibido una nueva opinión:\n\n$opinion";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirecciona al usuario de vuelta a la página de inicio
    header("Location: index.html");
    exit();
}
?>
