
<?php 

    include __DIR__.'/generation.php';
    function generatePassword($pswLength) {
        $generatedPassword = '';
        for($k=0; $k<$pswLength; $k++) {
            $charList = getRandomNumber(0,2);
            $charListMax = getRandomNumber(0, count($generationChar[$charList]))
            $generatePassword .= $generationChar[$charList][$charListMax];
        }
        return $generatedPassword;
    }

    function getRandomNumber($maxNumber) {
        return rand(0,$maxNumber);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PSWD Generator</title>
    </head>
    <body>

        <main>
            <div class="container-xxl border">
                <form action="#" method="GET">
                    <label for="psw_length">Lunghezza desiderata:</label>
                    <input type="number" name="psw_length" id="psw_length" required>
                    <button type="submit">Invia</button>
                </form>
            </div>
        </main>

    </body>
</html>