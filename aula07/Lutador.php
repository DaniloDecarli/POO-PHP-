<?php


class Lutador {
   // Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitoria, $derrotas, $empates;
   // Métodos
    function apresentar() {
       echo "<p>-----------------------------</p>";
       echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome();
       echo " Natural do País, " . $this->getNacionalidade();
       echo  ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg Categoria";
       echo "<br>Ele tem " . $this->getVitoria() . " vitórias ";
       echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
    }
    function status() {
       echo "<p>-------------------------</p>";
       echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
       echo " e já ganhou " . $this->getVitoria() . " vezes e ";
       echo " perdeu " . $this->getDerrotas() . " vezes e ";
       echo " empatou " . $this->getEmpates() . " vezes!";
    }
    function ganharLuta() {
      $this->setVitoria($this->getVitoria() + 1);
    }
    function perderLuta() {
      $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta () {
      $this->setEmpates($this->getEmpates() + 1);
    }
   // Métodos Especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitoria = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitoria() {
        return $this->vitoria;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function setVitoria($vitoria) {
        $this->vitoria = $vitoria;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
    }
}