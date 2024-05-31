<?php
class Film
{
    public string $titolo;
    public string $nazione;
    public string $anno;
    private string $contenuto_per_adulti;

    public function __construct(string $titolo, string $nazione, string $anno)
    {
        $this->titolo = $titolo;
        $this->nazione = $nazione;
        $this->anno = $anno;
    }

    public function setPubblico(string $contenuto_per_adulti)
    {
        if (in_array($contenuto_per_adulti, ["Per adulti", "Per tutta la famiglia"])) {
            $this-> contenuto_per_adulti = $contenuto_per_adulti;
        }
    }

    public function getPubblico()
    {
        return $this-> contenuto_per_adulti;
    }
}
