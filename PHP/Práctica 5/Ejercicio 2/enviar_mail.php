<?php

$dest = $_POST["dest"];
$asunto = $_POST["asunto"];
$msg = $_POST["msg"];
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

mail($dest,$asunto,$msg,$headers)
?>