<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body><pre>
    <?php
        require_once 'Video.php';
        require_once 'Gafanho.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanho("Danilo", 35, "M", "Decarli");
        $g[1] = new Gafanho("Fernanda", 26, "F", "Rossini");

        $vis[0] = new Visualizacao($g[0], $v[2]); //Danilo assista HTML5
        $vis[1] = new Visualizacao($g[0], $v[1]); //Danilo assista PHP

        $vis[0]->avaliar();
        $vis[1]->avaliar();

        //print_r($v);
        //print_r($g);
        print_r($vis);
    ?></pre>
</body>
</html>
