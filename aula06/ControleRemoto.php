<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    
    private $volume;
    private $ligado;
    private $tocando;
    
    function __construct() {
        $this->setLigado(false);
        $this->setTocando(false);
        $this->setVolume(50);
        
    }

    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo '<p>-------------Menu-------------</p>';
        echo "<br>Está Ligado? ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está Tocando? ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ". ($this->getVolume());
        for ($i=0;$i <= $this->getVolume(); $i+=5){
            echo "|";
        }
        echo '<br>';
        
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() and $this->getVolume()==0){
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "Fechando Menu...";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() and $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
        }
    }

    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }
    }

    public function pause() {
        if ($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if ($this->getLigado() and !($this->getTocando())){
            $this->setTocando(true);
        }
    }

}
