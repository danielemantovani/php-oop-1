<?php
    require_once "Models/film.php";
    require_once "Models/genere.php";

    // creazione istanze della classe genere
    $genere1 = new Genere ("Commedia");
    $genere2 = new Genere ("Western");

    // creazione istanze della classe film
    $film1 = new Film ("Altrimenti ci arrabbiamo", "Usa", "1974", $genere1);
    $film2 = new Film("Lo chiamavano Trinità", "Usa", "1970", $genere2);

    // controllo tramite funzione che venga inserita la stringa corretta
    $film1 -> setPubblico("Per tutta la famiglia");
    $film2 -> setPubblico("Per adulti");
    
    var_dump($film1);
    var_dump($film2);

?>