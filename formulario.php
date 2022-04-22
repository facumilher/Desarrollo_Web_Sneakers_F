<?php
    // Para capturar la info que se ingresa en los inputs del form tengo que crear variables.
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $mensaje = $_POST['textarea'];
    
    // A quien le mando esta info 
    $para = 'sneakersF@gmail.com';
    $asunto = 'Este mail fue enviado desde la web';

    // Función que envia la info del form- 
    mail($para, $asunto, utf8_decode($nombre, $mail, $mensaje));

    // Función que redirecciona al usuario una vez que completo el form
    header("Location:index.html");