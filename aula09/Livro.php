<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setPagAtual(FALSE);
        $this->setPagAtual(0);
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    
    public function detalhes(){
        echo "Livro ".$this->getTitulo() . " escrito por ".$this->getAutor();
        echo "<br> Paginas = " . $this->getTotPaginas() . " atual ".$this->getPagAtual();
        echo "<br> Sendo lido por " . $this->leitor->getNome();
    }
            
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->setAberto(TRUE);
    }

    public function avancarPag() {
        
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fechar() {
        $this->setAberto(FALSE);
    }

    public function folhear($pag) {
        if($pag > $this->getTotPaginas()){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($this->getPagAtual() + $pag);
        }
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}
