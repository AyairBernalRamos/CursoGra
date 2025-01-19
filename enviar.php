<?php
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    //echo $correo . " " . $nombre . " " . $mensaje;

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
                    Contacto: '.$nombre . '-'.$asunto .' <br>
                    Mensaje: '.$mensaje.'
                </p>
            </body>
        </html>
    ';
//para el envio en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

//dirección del remitente
$headers .= "FROM: ".$nombre <$correo>\r\n";
mail($destinatario, $asunto, $cuerpo, $headers);

echo "Correo enviado";
?>
<a href="index.html">Regresar</a>