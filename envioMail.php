<?php
$destinatario = 'cespedesjuanc@gmail.com';
//el correo al que va enviado el mensaje.

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];

$header = 'Enviado desde la pagina WEB_LYV';
$mensajeCompleto = $description . "\nAtentamente: " . $nombre . "\n". $telephone . "\n" . $mail;

mail($destinatario, $nombre, $mensajeCompleto, $header);
echo "<script> alert('correo enviado exitosamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";

?>
