<?php 

class Movie {

    //qui si deve fare la lista degli attributi e proprietà
    public $titolo;
    public $titolo_originale;
    public $trama;
    public $cast;
    public $regista;
    public $anno_di_produzione; 

    //costruttore 
    function __construct($titolo, $titolo_originale, $trama="Non è stato inserito alcuna descrizione",$cast="Non è stato inserito alcun attore", $regista, $anno_di_produzione="Sconosciuto") {
        $this->titolo = $titolo;
        $this->titolo_originale = $titolo_originale;
        $this->trama = $trama;
        $this->cast = $cast;
        $this->regista = $regista;
        $this->anno_di_produzione = $anno_di_produzione;
    }

    //METODI 

    // METODO PER LA GESTIONE DEL TITOLO 
    public function getTitolo() {
        return $this->titolo; 
    }
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }   // /METODO PER LA GESTIONE DEL TITOLO

    // METODO PER LA GESTIONE DEL TITOLO ORIGINALE
    public function getTitoloOriginale() {
        return $this->titolo_originale;
    }
    public function setTitoloOriginale($titolo_originale) {
        $this->titolo_originale = $titolo_originale;
    }   // /METODO PER LA GESTIONE DEL TITOLO ORIGINALE

    // METODO PER LA GESTIONE DELLA TRAMA 
    public function getTrama() {
        return $this->trama;
    }
    public function setTrama($trama) {
        $this->trama = $trama;
    }   // /METODO PER LA GESTIONE DELLA TRAMA

    // METODO PER LA GESTIONE DEL CAST 
    public function getCast() {
        return $this->cast;
    }
    public function setCast($cast) {
        $this->cast = $cast;
    }   // /METODO PER LA GESTIONE DEL CAST

    // METODO PER LA GESTIONE DEL REGISTA 
    public function getRegista() {
        return $this->regista;
    }
    public function setRegista($regista) {
        $this->regista = $regista;
    }   // /METODO PER LA GESTIONE DEL REGISTA

    // METODO PER LA GESTIONE DELL'ANNO DI PRODUZIONE 
    public function getAnnoDiProduzione() {
        return $this->anno_di_produzione;
    }
    public function setAnnoDiProduzione($anno_di_produzione) {
        $this->anno_di_produzione = $anno_di_produzione;
    }   // /METODO PER LA GESTIONE DELL'ANNO DI PRODUZIONE
}

?>