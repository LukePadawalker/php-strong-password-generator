<?php

function randomPasswordGenerator($length)
{
    $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
    $character_length = strlen($character);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $character_length - 1);
        $password .= $character[$number];
    }

    return $password;
}

// Verifica se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);

    // Controlla se la lunghezza della password è valida
    if ($password_length > 0) {
        // Genera la password casuale
        $password_casuale = randomPasswordGenerator($password_length);

        // Mostra la password all'utente
        echo '<p>La tua password casuale è: ' . htmlspecialchars($password_casuale) . '</p>';
    } else {
        echo '<p>La lunghezza della password deve essere un numero positivo maggiore di 0.</p>';
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Password generator</title>
</head>

<body>
    <div class="main">
        <div class="container d-flex flex-column align-items-center pt-4">
            <div class="h1 pb-4 pt-4">Strong Password generator</div>
            <div class="h1 pb-4">Genera una password sicura</div>
            <div class="alert alert-danger d-flex justify-content-center align-items-center mb-4" role="alert">
                Nessun parametro valido inserito!
            </div>


            <form class="password-generator d-flex flex-column justify-content-start p-5" action="index.php"
                method="get">
                <div class="row pt-4">
                    <div class="col-6 d-flex justify-content-start ps-4">
                        <p>Lunghezza password:</p>
                    </div>
                    <div class="col-6 d-flex justify-content-start ps-4"><input type="number" name="password_length">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-6 d-flex justify-content-start ps-4">
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>
                    <div class="col-6 d-flex align-items-start flex-column ps-4">
                        <label class="form-check-label" for="flexRadioDefault1"><input class="form-check-input mb-4"
                                type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            Sì</label>
                        <label class="form-check-label" for="flexRadioDefault2"><input class="form-check-input mb-4"
                                type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            No</label>
                    </div>
                </div>
                <div class=" row pt-4">
                    <div class="col-6 d-flex justify-content-center">
                    </div>
                    <div class="col-6 d-flex align-items-stat flex-column ps-4">
                        <label for="lettere"><input type="checkbox" name="lettere">
                            Lettere</label>
                        <label for="numeri"><input type="checkbox" name="numeri"> Numeri</label>
                        <label for="simboli"><input type="checkbox" name="simboli"> Simboli</label>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-6 d-flex justify-content-start p-4">
                        <input class="btn btn-primary me-2" type="submit" value="Invia">
                        <input class="btn btn-primary me-2" type="submit" value="Annulla">
                    </div>
                    <div class="col-6 d-flex align-items-center flex-column">
                    </div>
                </div>
            </form>



        </div>
    </div>

    </div>

</body>

</html>