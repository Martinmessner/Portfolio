<?php
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje']));
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $textarea = $_POST['textarea'];
    $asunto = $_POST['PORTFOLIO MARTIN MESSNER'];
    $mensaje = $_POST['mensaje'];
    $emaill = "martinmessner95@gmail.com";
    
    $body = <<<HTML
    <h1>Contacto desde mi Portafolio :D</h1>
    <p>De: $nombre, Email: $email</p>
    <h2>Asunto: $asunto</h2>
    <h2>Mensaje:</h2>
    $mensaje
HTML;

$header = "Content-type: text/html; charset=utf-8 \r\n";

    $mail = mail($emaill,$asunto,$body,$header);
     if ($mail) {
        echo '<script>alert("Mensaje Enviado Correctamente"), window.location.href = "index.html";</script>';
        }
    }
?>
    