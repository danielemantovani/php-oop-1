<?php
    require_once "Models/film.php";

    $film1 = new Film ("Altrimenti ci arrabbiamo", "Usa", "1974");
    $film2 = new Film("Lo chiamavano Trinità", "Usa", "1970");
    $film1 -> setPubblico("Per tutta la famiglia");

    var_dump($film1);
    var_dump($film2);

    var_dump($film1 -> setPubblico("Risultato"))

?>