<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col bg-secondary">
                <h1>Teacher</h1>
                <?php foreach ($db["teachers"] as $teacher) { ?>
                    <ul>
                        <li class="list-unstyled">
                            <p><?php echo $teacher["name"] . " " . $teacher["lastname"] ?></p>
                        </li>
                    </ul>
                <?php } ?>
            </div>
            <div class="col bg-success">
                <h1>PM</h1>
                <?php foreach ($db["pm"] as $pm) { ?>
                    <ul>
                        <li class="list-unstyled">
                            <p><?php echo $pm["name"] . " " . $pm["lastname"] ?></p>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>