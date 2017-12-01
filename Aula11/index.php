<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        $a1 = new Aluno();
        $a1->setNome("Maicon Cerutti");
        $a1->setMatr(0001);
        $a1->setIdade(19);
        $a1->setSexo("M");
        $a1->setCurso("Engenharia de Software");
        
        $a1->pagarMensalidade();
        
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("Jesus");
        $b1->setMatr(1212);
        $b1->setBolsa(12.5);
        $b1->setCurso("Filosofia");
        $b1->setIdade(32);
        $b1->pagarMensalidade();
        
        print_r($b1);
              
        
        ?>
        </pre>
    </body>
</html>
