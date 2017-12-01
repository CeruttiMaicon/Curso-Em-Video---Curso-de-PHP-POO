<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto YouTube</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 HTML5");
        
        $g[0] = new Gafanhoto("Maicon", 19, "M", "maicon.cerutti");
        $g[1] = new Gafanhoto("Thafila", 20, "F", "thaf.kru");
        
        
        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);
        
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(5);
        print_r($vis);
        
        
                
                
        
        ?>
        </pre>
    </body>
</html>
