<?php

require_once 'Aluno.php';
class Bolsista extends Aluno {
    
    private $bolsa;
    
    public function renovarBolsa(){
        echo"<p>Bolsa Renovada<p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>{$this->getNome()} é bolsista então paga com desconto!</p>";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


}
