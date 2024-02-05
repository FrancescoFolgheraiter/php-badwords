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
        <!--boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h2 class="text-center">
            Risultato
        </h2>
        <div>
        <?php
        echo $text;
        echo "<br>";
        echo "Lunghezza del paragrafo pari a :".strlen($text);
        ?>

        </div>
        <div>
        <?php
        echo str_replace($word, '***', $text);
        echo "<br>";
        echo "Lunghezza del paragrafo censurato con la parola: ".$word." è di: ".strlen(str_replace($word, '***', $text));
        ?>
        </div>
    </body>
</html>