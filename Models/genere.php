<?php 

class Genere 
    {
    private string $genere;

    public function __construct(string $genere)
    {
        $this -> genere = $genere;
    }

    public function setGenere($genere){
        if(!in_array($genere, ["Azione", "Western", "Commedia", "Horror", "Fantasy"])){
            throw new Exception ("Genere non valido");
        } else{
            $this -> genere = $genere;
        }
    }

    public function getGenere(){
        return $this -> genere;
    }
}


