<?php
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $mensaje = htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8');

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido.");
    }

    $destinatario = "ayairbernalramos@gmail.com";
    $asunto = "Envio de PDF";
    $cuerpo = '
        <html>
            <head>
                <title>Envio de PDF</title>
            </head>
            <body>
                <h1>Solicitud de contacto desde correo de prueba</h1>
                <p>
                    Contacto: ' . $nombre . '<br>
                    Mensaje: ' . nl2br($mensaje) . '
                </p>
            </body>
        </html>
    ';

    // Configurar los encabezados
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $nombre . " <" . $correo . ">\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Correo enviado";
    } else {
        echo "Error al enviar el correo.";
    }
?>
<a href="index.html">Regresar</a>
