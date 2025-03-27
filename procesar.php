<?php
// procesar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = trim($_POST['nombres']);
    $correo = trim($_POST['correo']);
    $numero = trim($_POST['numero']);
    
    if (empty($nombres) || empty($correo) || empty($numero)) {
        die("Error: Todos los campos obligatorios deben ser completados.");
    }
    
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Error: Correo inválido.");
    }
    
    if (!preg_match('/^\d{9,15}$/', $numero)) {
        die("Error: Número de teléfono inválido.");
    }
    
    // Enviar correo
    $destinatario = "consultas@encoredigitalperu.com";
    $asunto = "Nuevo mensaje del formulario de contacto";
    $mensaje = "Nombre: $nombres\nCorreo: $correo\nNúmero: $numero";
    $cabeceras = "From: $correo\r\nReply-To: $correo\r\nContent-Type: text/plain; charset=UTF-8";
    
    mail($destinatario, $asunto, $mensaje, $cabeceras);
    
    // Redirigir a la página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>