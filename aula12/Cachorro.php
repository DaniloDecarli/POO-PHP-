<?php

require_once 'Mamifero.php';
class Cachorro extends Mamifero {
     public function enterraOsso() {
         echo "<p>Desemterrando o Osso</p>";
     }

     public function abanarRabo() {
         echo "<p>Abanando o Rabo</p>";
     }
}