<?php

require_once 'Video.php';
require_once 'Gafanho.php';
class Visualizacao {
    private $espectador;
    private $filme;

    /**
     * Visualizacao constructor.
     * @param $espectador
     * @param $filme
     */
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        }elseif ($porc <= 50) {
            $nova = 5;
        }elseif ($porc <= 90) {
            $nova = 8;
        }else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }

    /**
     * @return mixed
     */
    public function getEspectador() {
        return $this->espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme() {
        return $this->filme;
    }

    /**
     * @param mixed $espectador
     */
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    /**
     * @param mixed $filme
     */
    public function setFilme($filme) {
        $this->filme = $filme;
    }




}