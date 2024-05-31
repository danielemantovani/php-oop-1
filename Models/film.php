<?php
class Film{
    public string $titolo;
    public string $nazione;
    public string $durata;
    private string $contenuto_per_adulti;

    public function __construct( string $titolo, string $nazione, string $durata)
    {
        $this-> titolo = $titolo;
        $this-> nazione = $nazione;
        $this-> durata = $durata;
    }
}
?>