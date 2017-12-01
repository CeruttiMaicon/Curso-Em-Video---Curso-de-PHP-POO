<?php

require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    
    private $titulo;
    private $avaliacoes;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->setAvaliacoes(0);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(FALSE);
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacoes() {
        return $this->avaliacoes;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAvaliacoes($avaliacoes) {
        # if ($this->getViews() == 0){
        #    echo "Não dividas por zero sua mula...";
        #}else{
        $media = ($this->avaliacoes + $avaliacoes)/($this->getViews());
        $this->avaliacoes = $media;
        #}
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

        
    
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        if ($this->getReproduzindo()){
            $this->setReproduzindo(FALSE);                    
        }
    }

    public function play() {
        if(!$this->getReproduzindo()){
            $this->setReproduzindo(TRUE);
        }
    }

}
