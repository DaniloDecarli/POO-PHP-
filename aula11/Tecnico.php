<?php

require_once 'Aluno.php';
class Tecnico extends Aluno {
      private $tecnico;

      public function registroProfissional() {
        echo "<p>Exerce registro técnico em $this->tecnico</p>";
      }

    public function getTecnico() {
        return $this->tecnico;
    }

    public function setTecnico($tecnico) {
        $this->tecnico = $tecnico;
    }


}