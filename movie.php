<?php
    ini_set('display_errors', 1);

    class Movie{
        public $titolo;
        public $trama;
        public $anno;
        public $cast;
        public $sconto = 0;

        public function __construct($titolo,$trama,$anno) {
            $this->titolo = $titolo;
            $this->trama = $trama;
             $this->anno = $anno;
        }

    }

    //Prova istanze

    // $filmA = new Movie();
    // $filmA -> titolo="non è un paese per vecchi";
    // $filmA -> trama="Durante una battuta di caccia in solitaria, un saldatore del Texas trova e si impossessa di una somma di denaro precedentemente rubata. L'uomo diventa così preda di una banda di criminali.";
    // $filmA -> anno=2007;
    // $filmA -> cast= "attori generici";
    // var_dump($filmA);

    //prova costrutto
    

    $filmA = new Movie ('Non è un paese per vecchi', 'secondo Lorem ipsum',1986);
    $filmB = new Movie ('Noi ragazzi dello zoo di Berlino', 'secondo Lorem ipsum',1986);
    $filmC = new Movie ('Split','terzo lorem ipsum',2016);
    //
     echo 'Titolo: ' .$filmA->titolo .'<br>' .'Trama: ' .$filmA->trama .'<br>' .'Anno di uscita: '.$filmA->anno;
     echo '<br>';
     echo 'Titolo: ' .$filmB->titolo .'<br>' .'Trama: ' .$filmB->trama .'<br>' .'Anno di uscita: '.$filmB->anno;
     echo '<br>';
     echo 'Titolo: ' .$filmC->titolo .'<br>' .'Trama: ' .$filmC->trama .'<br>' .'Anno di uscita: '.$filmC->anno;


?>