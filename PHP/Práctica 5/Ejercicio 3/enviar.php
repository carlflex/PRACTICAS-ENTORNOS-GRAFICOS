<?php
    $destino = $_POST['emailAmigo'];
    $asunto = "Recomendación de sitio";
    $desde = 'From:' .$_POST['email'];
    $comentario = '<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
            <div class="container mt-5 ">
                <div class="row justify-content-center">
                    <div class="col-8 p-5 rounded-3" style="background-color: antiquewhite;">
                        <h1> Recomendación de Sitio web </h1><br>
                        <p> Hola, te recomiendo que visites el sitio web de <a href="https://pasodelbosque.com.ar/locales">Shopping Paso del Bosque</a> </p>
                    </div>
                </div>
            </div>
        </body>
        </html>';
    
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    mail($destino,$asunto,$comentario,$desde,$headers);
?>