<?php

require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom() {
        echo"<p>Som de Ave</p>";
    }

    public function locomover() {
        echo"<p>Voando</p>";
    }
    
    public function fazerNicnho(){
        echo"<p>Construindo um ninho</p>";
    }

}
