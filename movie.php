<?php
    ini_set('display_errors', 1);

    class Movie{
        public $titolo;
        public $trama;
        public $anno;
        public $cast;

    }

    $filmA = new Movie();
    $filmA -> titolo="non è un paese per vecchi";
    $filmA -> trama="Durante una battuta di caccia in solitaria, un saldatore del Texas trova e si impossessa di una somma di denaro precedentemente rubata. L'uomo diventa così preda di una banda di criminali.";
    $filmA -> anno=2007;
    $filmA -> cast= "attori generici";
    var_dump($filmA);

?>