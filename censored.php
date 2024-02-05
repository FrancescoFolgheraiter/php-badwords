<?php
    $text = trim($_GET["paragraph"]);
    $word = trim($_GET["censuredWord"]);

?>
<!--struttura sito-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>
        <h2>
            Risultato
        </h2>
        <div>
        <?php
        echo $text;
        echo "Lunghezza del paragrafo pari a :".strlen($text);
        ?>

        </div>
        <div>
        <?php
        echo str_replace($word, '***', $text);
        echo "Lunghezza del paragrafo censurato con la parola: ".$word." è di: ".strlen(str_replace($word, '***', $text));
        ?>
        </div>
    </body>
</html>