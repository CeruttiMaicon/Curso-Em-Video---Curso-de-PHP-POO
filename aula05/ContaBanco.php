<?php


class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo '<p>Conta criada com sucesso!</p>';
        
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }else{
            echo "Esse tipo de conta não existe";
        }
        
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro, faça um saque de {$this->getSaldo()} para poder fechar a conta</p>";
        }elseif($this->getSaldo() < 0){
            echo "<p>Conta em divida, pague a divida de {$this->getSaldo()} para poder fechar a conta</p>";
        }else{
            $this->setStatus(FALSE);
            echo "Conta fechada com sucesso!";
        }
    }
    
    public function depositar($reais){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $reais);
            echo "<p>Deposito de $reais na conta de {$this->getDono()}</p>";
        }else{
            echo "<p>Conta não existente ou fechada.</p>";
        }
    }
    
    public function sacar($valorSaque){
        if (($this->getStatus() and ($this->getSaldo()>=$valorSaque))){
            $this->setSaldo($this->getSaldo() - $valorSaque);
            echo "<p>Saque de $valorSaque autorizado na conta de {$this->getDono()}</p>";
        }else{
            echo "<p>Saldo insuficiente ou conta fechada</p>";
        }
    }
    
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        }else if($this->getTipo() == "CP"){
            $v = 20;
        }
        
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta de {$this->getDono()})</p>";
        }else{
            echo "<p>Problemas com a conta. Não posso cobrar";
        }
        
    }


}
