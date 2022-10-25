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
        $this->attore = $attorePrincipale;
        $this->uscita = $dataUscita;


    }

    //Metodi

    function locandina(){
        echo "<p>Il titolo del film è <strong>$this->pippo</strong></p>";
        echo "<p>Il regista è <strong>$this->regista</strong></p>";
        echo "<p>L'attore principale è <strong>$this->attore</strong>e</p>";
        echo "<p>Data di uscita <strong>$this->uscita</strong></p>";
        echo "<hr>";
    
    }


}

$datiFilm = new Movie("Interstellar", "Christopher Nola", "Matthew McConaughey", "26 ottobre 2014");
$datiFilm->locandina();

$datiFilm2 = new Movie("Inception", "Christopher Nola", "Leonardo di Caprio", "26 ottobre 2017");
$datiFilm2->locandina();


?>