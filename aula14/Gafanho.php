<?php

require_once 'Pessoa.php';
class Gafanho extends Pessoa {
     private $login;
     private $totAssistido;

    /**
     * Gafanho constructor.
     * @param $login
     */
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistirMaisUm() {
         $this->totAssistido ++;
     }

    /**
     * @return mixed
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * @return int
     */
    public function getTotAssistido() {
        return $this->totAssistido;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login) {
        $this->login = $login;
    }

    /**
     * @param int $totAssistido
     */
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }



}