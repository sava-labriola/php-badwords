<?php
    $frase = 'Oggi sta piovendo molto';
    $parola_censurata = $_GET = ['badword'];
    $censura = '***';
    $testo_censurato = str_replace($parola_censurata, $censura, $frase);
    $lunghezza_frase = strlen($testo_censurato);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>badwords</title>
    </head>
    <body>
        <section>
            <p> <?php echo $testo_censurato ?></p>
            <p> <?php echo $lunghezza_frase ?></p>
        </section>
    </body>
</html>
