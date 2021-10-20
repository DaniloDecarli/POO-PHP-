<?php


class ContaBanco{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Métodos
    public function abrirConta($t) {
           $this->setTipo($t);
           $this->setStatus(true);
           if ($t == "CC") {
               $this->setSaldo(50);
           } elseif ($t == "CP") {
               $this->setSaldo(150);
           }
    }
    public function fecharConta() {
          if ($this->getSaldo() > 0) {
              echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
          }elseif ($this->getSaldo() < 0) {
              echo "<p>Conta não encerrada por Débito!</p>";
          } else {
              $this->getStatus(false);
              echo "<p>Conta de ".$this->getDono()." fechada com sucesso!</p>";
          }
    }
    public function depositar($v) {
         if ($this->getStatus()) {
             $this->setSaldo($this->getSaldo() + $v);
             echo "<p>Depósito de $v conta ".$this->getDono()."</p>";
         } else {
             echo "<p>Deposito não realizado, Conta encerrada.</p>";
         }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Saque de $v autorizado conta ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não realizado saque, conta encerrada!</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de $v debitada na conta de ".$this->getDono()."</p>";
            } else {
                echo "<p>Problemas com a conta, falta de saldo!</p>";
            }

        } else {
            echo "<p>Conta encerrrada!</p>";
        }
    }
    // Métodos Epeciais
    public function __construct() {
         $this->setSaldo(0);
         $this->setStatus(false);
         echo "<p>Conta criada com sucesso!</p>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
}