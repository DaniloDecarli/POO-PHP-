<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body><pre>
    <?php
    //require_once 'Mamifero.php';
    //require_once 'Reptil.php';
    //require_once 'Peixe.php';
    //require_once 'Ave.php';
    require_once 'Cachorro.php';
    require_once 'Canguru.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Tucunare.php';
    require_once 'Arara.php';

    $c = new Cachorro();
    $c->setCorPelo('Marron');
    $c->setPeso(15.0);
    $c->setIdade(8);
    $c->locomover();
    $c->alimentar();
    $c->emitirSom();
    $c->enterraOsso();
    $c->abanarRabo();

    $g = new Canguru();
    $g->setPeso(60.0);
    $g->setIdade(8);
    $g->locomover();
    $g->alimentar();
    $g->emitirSom();
    $g->usarBolsa();

    $j = new Cobra();
    $j->setIdade(4);
    $j->setCorEscama('Coral');
    $j->setPeso(1.200);
    $j->locomover();
    $j->alimentar();
    $j->emitirSom();

    $t = new Tartaruga();
    $t->setIdade(72);
    $t->setPeso(25.0);
    $t->setCorEscama('Verde');
    $t->locomover();
    $t->alimentar();
    $t->emitirSom();

    $p = new Tucunare();
    $p->setPeso(2.0);
    $p->setIdade(2);
    $p->setCorEscama('Dourado');
    $p->locomover();
    $p->alimentar();
    $p->emitirSom();
    $p->soltarBolha();
    $p->habitar();

    $a = new Arara();
    $a->setPeso(1.8);
    $a->setIdade(40);
    $a->setCorPena('Azul');
    $a->locomover();
    $a->alimentar();
    $a->emitirSom();
    $a->detalhe();

    print_r($c);
    print_r($g);
    print_r($j);
    print_r($t);
    print_r($p);
    print_r($a);

    ?></pre>
</body>
</html>
