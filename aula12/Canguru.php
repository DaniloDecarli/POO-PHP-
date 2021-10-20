<?php

require_once 'Mamifero.php';
class Canguru extends Mamifero {
      public function usarBolsa() {
          echo "<p>Filhote na Bolsa</p>";
      }
      public function locomover() {
          echo "<p>Saltando rápido</p>";
      }
}