<?php


class Caneta {
    public $modelo;
    public $cor; 
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso Rabiscar</p>";
        }else{
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    
     public function tampar(){
        $this->tampada = TRUE;
    }
   
    public function destampar (){
        $this->tampada = FALSE;
    }
}

    
