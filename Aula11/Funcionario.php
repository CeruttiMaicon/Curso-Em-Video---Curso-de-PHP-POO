<?php

require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
    
    public function mudarTrabalho($novoTrabalho){
        $this->setTrabalhando($this->getTrabalhando($novoTrabalho));
    }
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }


    
}
