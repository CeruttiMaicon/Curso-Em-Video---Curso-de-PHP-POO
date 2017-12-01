<?php

require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    
    public function alimentar() {
        echo"<p>Comer Vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>som de Réptil</p>";
    }

    public function locomover() {
        echo"<p>Rastejando</p>";
    }

}
