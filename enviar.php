<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

// Datos para el correo
$destinatario = "psychedelia_2@outlook.com";
$asunto = "contacto cabañas sierrahuacha";

$carta = "De: $nombre \n";
$carta .= "email: $email \n";
$carta .= "comentarios: $comentarios";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);

?>
