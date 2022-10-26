<?php
  
class Movie {

    //Proprietà

    public $titolo;
    public $regista;
    public $attorePrincipale;
    public $dataUscita;

    //Costruttore

    function __construct($titolo, $regista, $attorePrincipale, $dataUscita){

        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->attorePrincipale = $attorePrincipale;
        $this->datauscita = $dataUscita;


    }

    //Metodi

    function locandina(){
        echo "<p>Il titolo del film è <strong>$this->titolo</strong></p>";
        echo "<p>Il regista è <strong>$this->regista</strong></p>";
        echo "<p>L'attore principale è <strong>$this->attorePrincipale</strong>e</p>";
        echo "<p>Data di uscita <strong>$this->dataUscita</strong></p>";
        echo "<hr>";
    
    }


}

$datiFilm = new Movie("Interstellar", "Christopher Nolan", "Matthew McConaughey", "26 ottobre 2014");
$datiFilm->locandina();

$datiFilm2 = new Movie("Inception", "Christopher Nola", "Leonardo di Caprio", "26 ottobre 2017");
$datiFilm2->locandina();


?>