<?php
    $text = $_GET["paragraph"];
    $word = $_GET["censuredWord"];
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
        <?php
        echo $text;
        echo $word;
        ?>
    </body>
</html>