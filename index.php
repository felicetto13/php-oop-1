<?php

class Movie {
    public $titolo;
    public $genere;
    public $regista;
    public $attori;
    public $anno;


    function __construct($_titolo,$_genere,$_regista,$_attori,$_anno)
    {
        $this->titolo = $_titolo;    
        $this->genere = $_genere;  
        $this->regista = $_regista;  
        $this->attori = $_attori;  
        $this->anno = $_anno;
    }

    public function getFullCast(){
        return "<i>Regista</i>: ".$this->regista.".<br>  <i>Attori</i>: ".$this->attori;
    }
}

$movie1 = new Movie("La casa di carta","avventura","Pinco Pallino", "Pluto",2017);
$movie2 = new Movie("Gomorra","Mafia","Marco D'Amore","Gennaro Savastano, Marco D'Amore", 2012);


echo "Il primo film è ". $movie1->titolo . ".<br> <strong>Il cast</strong> <br>". $movie1->getFullCast() .".<br> Genere del film: ". $movie1->genere.".<br> Anno di uscita: ".$movie1->anno.".";
echo "<hr>";
echo "Il primo film è ". $movie2->titolo . ".<br> <strong>Il cast</strong> <br>". $movie2->getFullCast() .".<br> Genere del film: ". $movie2->genere.".<br> Anno di uscita: ".$movie2->anno.".";