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
        <h1 class="text-center">
            Php Badwords
        </h1>
        <div class="container">
            <form action="./censored.php" method="GET">
                <div class="d-flex align-items-center mb-3">
                    <label class="me-3" for="paragraph">Paragrafo:</label>
                    <textarea name="paragraph" id="paragraph" cols="45" rows="10" placeholder="Inserisci un paragrafo"></textarea>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label class="me-3" for="censuredWord">Parola:</label>
                    <input type="text" placeholder="Inserisci una parola da censurare" name="censuredWord" id="censuredWord">
                </div>
                <button type="submit">
                    Censura
                </button>
            </form>
        </div>
    </body>
</html>