<?php


abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     * @param $sexo
     */
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    /**
     * @return mixed
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getIdade() {
        return $this->idade;
    }

    /**
     * @return mixed
     */
    public function getSexo() {
        return $this->sexo;
    }

    /**
     * @return int
     */
    public function getExperiencia() {
        return $this->experiencia;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    /**
     * @param int $experiencia
     */
    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }


    protected function ganharExp($n) {
        $this->experiencia += $n;
    }
}