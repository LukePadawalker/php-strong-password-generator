<?php
session_start();



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
            <div class="color-white">
            </div>
            <?php
            if (isset($_SESSION["random-password"]) && $_SESSION["random-password"]) {

                echo '<div class="color-white"> Password:' . $_SESSION['random-password'] . '</div>';
            }
            ?>




        </div>
    </div>

    </div>

</body>

</html>