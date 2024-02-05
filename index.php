<!--struttura sito-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body> 
        <h1>
            Php Badwords
        </h1>
        <div>
            <form action="./censored.php" method="GET">
                <div>
                    <label for="paragraph">Paragrafo:</label>
                    <textarea name="paragraph" id="" cols="45" rows="10" placeholder="Inserisci un paragrafo"></textarea>
                </div>
                <div>
                    <label for="censuredWord">Parola:</label>
                    <input type="text" placeholder="Inserisci una parola da censurare" name="censuredWord">
                </div>
                <button type="submit">
                    Censura
                </button>
            </form>
        </div>
    </body>
</html>