<?php
class film{
    public string $titolo;
    public string $nazione;
    public string $durata;
    private string $contenuto_per_adulti;

    public function __construct( string $titolo, string $nazione, string $durata, string $contenuto_per_adulti )
    {
        $this -> $titolo = $titolo;
        $this -> $nazione = $nazione;
        $this -> $durata = $durata;
    }
}
?>