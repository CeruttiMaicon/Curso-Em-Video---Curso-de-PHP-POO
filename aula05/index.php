<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício Conta Banco - Aula 05 POO em PHP </title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1111);
            $p2->abrirConta("CP");
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(2222);
            
            $p1->depositar(300);
            $p2->depositar(500);
            
            $p2->sacar(100);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            print_r($p1);
            print_r($p2);
            
            
        ?>
        </pre>
    </body>
</html>
