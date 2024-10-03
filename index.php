<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($posts as $postDate => $postInDate) { ?>
        <h4>Data: <?= $postDate ?> </h4>
        <main>
            <ul>
                <?php foreach ($postInDate as $singlePost) { ?>
                    <li>
                        <h5>
                            <?= $singlePost["title"]; ?>
                        </h5>
                        <p>
                            <strong>Scritto da: <?= $singlePost["author"]; ?> </strong>
                        </p>
                        <p>
                            <strong>Testo: <?= $singlePost["text"]; ?> </strong>
                        </p>
                    </li>
                <?php } ?>
            </ul>
        </main>
    <?php } ?>
</body>

</html>