<?php

require_once __DIR__ . '/classes/movie.php';

$joker1 = new Movie(
    'Joker',
    'Warner Bros',
    ['Drammatico', 'Thriller Psicologico',],
    2019,
    9
);

$joker2 = new Movie(
    'Joker - Folie à Deux',
    'Warner Bros',
    ['Drammatico', 'Musical', 'Cringe'],
    2024,
    6
);

$paperino = new Movie(
    'Classe 130',
    'Boolean',
    ['Commedia', 'Circo'],
    2024,
    4
);

$movies = [$joker1, $joker2, $paperino];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Lista Film</title>
</head>
<body>
    <h1 class="text-center py-3">Lista Film</h1>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>     
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Genre</th>
                    <th scope="col-auto">Year</th>
                    <th scope="col-auto">Vote</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($movies as $movie):
                ?>
                    <tr>
                        <td>
                            <?php
                                echo htmlspecialchars($movie->getTitle());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($movie->getAuthor());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars(implode(', ', $movie->getGenre()));
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($movie->getYear());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($movie->getVote()) . '/10';
                            ?>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
