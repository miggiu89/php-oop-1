<?php
    ini_set('display_errors', 1);

    class Movie{
        public $titolo;
        public $trama;
        public $anno;
        public $cast;
        private $sconto = 0;
        public $eta_user;

        public function __construct($titolo,$trama,$anno,$eta_user) {
            $this->titolo = $titolo;
            $this->trama = $trama;
             $this->anno = $anno;
             $this->eta_user =  $eta_user;
        }

        public function setSconto($eta_user){
            if($eta_user < 18 ){
                $this -> sconto = 30;
            }
        }

        public function getSconto(){
            return $this-> sconto;
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
    

    $filmA = new Movie ('Non è un paese per vecchi', 'secondo Lorem ipsum', 2007, 19);
    $filmB = new Movie ('Noi ragazzi dello zoo di Berlino', 'secondo Lorem ipsum',1986, 14);
    $filmC = new Movie ('Split','terzo lorem ipsum',2016, 22);
    
     echo 'Titolo: ' .$filmA->titolo .'<br>' .'Trama: ' .$filmA->trama .'<br>' .'Anno di uscita: '.$filmA->anno .'<br>'.'Sconto applicato: ' .$filmA->setSconto($filmA->eta_user);
     echo '<br>';
     echo 'Titolo: ' .$filmB->titolo .'<br>' .'Trama: ' .$filmB->trama .'<br>' .'Anno di uscita: '.$filmB->anno .'<br>'.'Sconto applicato: ' .$filmB->setSconto($filmB->eta_user);
     echo '<br>';
     echo 'Titolo: ' .$filmC->titolo .'<br>' .'Trama: ' .$filmC->trama .'<br>' .'Anno di uscita: '.$filmC->anno .'<br>'.'Sconto applicato: ' .$filmC->setSconto($filmC->eta_user);


     $films = [$filmA,$filmB,$filmC];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Movies</h1>
        <div class="movie">
            <?php foreach ($films as $film){?>
                <h3><?php $film->titolo ?></h3>
                <p>Trama:<?php $film->trama ?></p>
                <p>Anno uscita:<?php $film->anno ?></p>
           <?php } ?>
        
        </div>
    
</body>
</html>