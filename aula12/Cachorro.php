<?php

require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    
    public function enterrarOsso(){
        echo "<p>Enterrando Osso</p> ";
    }
    
    public function abanarRabo(){
        echo "<p>Abanando o rabo</p>";
    }
    
    public function emitirSom() {
        Echo "<p>AUAUAUAUA</p>";
    }
}
