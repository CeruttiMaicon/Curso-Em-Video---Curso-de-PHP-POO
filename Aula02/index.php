<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'caneta.php';
            
            $c1 = new Caneta;
            $c1->cor = "azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            $c1->tampar();
            $c1->destampar();
            $c1->rabiscar();
            print_r($c1);
            echo '<br/>';
            
            $c2 = new Caneta;
            $c2->cor = "verde";
            $c2->carga = 50;
            $c2->tampada = true;
            $c2->tampar();
            print_r($c2);
            echo '<br>';
            

            
        ?>
    </body>
</html>
