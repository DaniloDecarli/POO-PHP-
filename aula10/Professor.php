<?php

require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidades;
    private $salario;

    public function receberAumento($aum) {
       $this->salario += $aum;
    }

    public function getEspecialidades() {
        return $this->especialidades;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidades($especialidades) {
        $this->especialidades = $especialidades;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }



}