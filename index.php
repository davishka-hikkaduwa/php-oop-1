<?php

require_once __DIR__ . '/models/movie.php';

$movie = new Movie('Back to the future', 'Robert Zemeckis');
$movie->addActor('Michael J. Fox');
$movie->addActor('Cristopher Lloyd');
$movie->year = 1986;
$movie->duration = 90;
$movie->description = 'Un tipo torna nel passato e ci prova con sua madre';

var_dump($movie);

$another_movie = new Movie('Akira');
$another_movie->language = 'Japanese';
$another_movie->director = 'Katsuhiro Otomo';

var_dump($another_movie);


?>