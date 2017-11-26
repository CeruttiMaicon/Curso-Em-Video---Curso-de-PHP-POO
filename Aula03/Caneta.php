<?php


class Caneta {
    var $modelo;
    var $cor; 
    var $ponta;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso Rabiscar</p>";
            
        }else{
            echo "<p>Estou Rabiscando...</p>";
        }
        
    }
    
    function tampar(){
        $this->tampada = TRUE;
    }
    
    function destampar (){
        $this->tampada = FALSE;
    }
}

    
