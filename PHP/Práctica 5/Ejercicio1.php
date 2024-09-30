<?php

$dest = "lucatrincavelli04@gmail.com";
$asunto = "Ejercicio 1 Práctica 5 PHP";
$cuerpo = "

<html>
<head>
  <title>Mail en HTML</title>
</head>
<body>
  <p>Ejercicio 1 Práctica 5 PHP</p>
</body>
</html>

";
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
mail($dest,$asunto,$cuerpo,$headers);
?>