<!-- Prendo i dati da index.php
 -->
<?php
$name = $_GET["firstName"];
$email = $_GET["emails"];
$age = $_GET["ageValue"];
$password = $_GET["passValue"];
$email = "example@email.com";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<main class="container border border-1 rounded p-3">
    <div class="border border-black border-3 rounded-4 p-2 row mb-3">
        <?php if (strlen($name) > 4 && filter_var($email)) { ?>
        <h1>
            ACCESSO GARANTITO
        </h1>
        <?php } else { ?>
        <h1>ACCESSO NEGATO</h1>
        <?php }?>
    </div>
</main>