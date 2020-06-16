<!-- predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate
una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php
    $frase = 'Oggi sta piovendo molto';
    $parola_censurata = $_GET['badword'];
    $censura = '***';
    $testo_censurato = str_replace($parola_censurata, $censura, $frase);
    $lunghezza_frase = strlen($frase);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>badwords</title>
    </head>
    <body>
        <section>
            <h1>Testo censurato</h1>
            <p> <?php echo $testo_censurato ?></p>
            <h2>Lunghezza frase</h2>
            <p> <?php echo $lunghezza_frase ?></p>
        </section>
    </body>
</html>
