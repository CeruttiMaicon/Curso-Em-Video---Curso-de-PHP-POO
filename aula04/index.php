<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require 'Caneta.php';
            
            $c1 = new Caneta("BIC","Verde",0.7);
            $c2 = new Caneta("BIV","Vermelha",0.5);
            
            print_r($c1);
            print_r($c2);
        
        ?>
        </pre>
    </body>
</html>
