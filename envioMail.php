<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];


mail('cespedesjuanc@gmail.com', $nombre, $mail, $telephone, $description);

?>
