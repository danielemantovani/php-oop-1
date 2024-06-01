<?php

require_once "genere.php";
class Film
{
    public string $titolo;
    public string $nazione;
    public string $anno;
    private string $pubblico;
    public Genere $genere;

    public function __construct(string $titolo, string $nazione, string $anno, Genere $genere)
    {
        $this -> titolo = $titolo;
        $this -> nazione = $nazione;
        $this -> anno = $anno;
        $this -> genere = $genere;
    }

    public function setPubblico(string $pubblico)
    {
        if (in_array($pubblico, ["Per adulti", "Per tutta la famiglia"])) {
            $this-> pubblico = $pubblico;
        }
    }

    public function getPubblico()
    {
        return $this-> pubblico;
    }
}
