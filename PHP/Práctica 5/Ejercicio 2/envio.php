<?php
    $destino = "pedemontenicolas2004@gmail.com";
    $asunto = $_POST['asunto'];
    $desde = 'From:' .$_POST['email'];
    $comentario = "
    \n
    Nombre: $_POST[nombre]\n
    Email: $_POST[email]\n
    Consulta: $_POST[texto]\n
    Enviado: $fecha a las $hora\n
    \n
    ";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    mail($destino,$asunto,$comentario,$desde,$headers);
?>