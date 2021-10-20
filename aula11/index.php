<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body><pre>
    <?php
       require_once 'Visitante.php';
       require_once 'Aluno.php';
       require_once 'Bolsista.php';
       require_once 'Tecnico.php';
       require_once 'Pessoa.php';
       require_once 'Professor.php';

       $v1 = new Visitante();
       $v1->setNome("Juvenal");
       $v1->setIdade(33);
       $v1->setSexo("M");

       $a1 =new Aluno();
       $a1->setNome("Pedro");
       $a1->setMatricula(111);
       $a1->setIdade(16);
       $a1->setSexo("M");
       $a1->setCurso("Informática");
       $a1->pagarMensalidade();

       $b1 = new Bolsista();
       $b1->setMatricula(1112);
       $b1->setNome("Jubileu");
       $b1->setBolsa(12.5);
       $b1->setCurso("Administração");
       $b1->setIdade(17);
       $b1->setSexo("M");
       $b1->pagarMensalidade();

       $t1 = new Tecnico();
       $t1->setNome("Danilo");
       $t1->setMatricula(22256);
       $t1->setSexo("M");
       $t1->setIdade(34);
       $t1->setCurso("Engenharia");
       $t1->setTecnico("Engenharia da Computação");

       $p1 = new Professor();
       $p1->setNome("Roberto");
       $p1->setEspecialidade("Python");
       $p1->setSalario(3200.00);
       $p1->setIdade(45);
       $p1->receberAumento(1000.00);
       $p1->setSexo("M");


       print_r($v1);
       print_r($a1);
       print_r($b1);
       print_r($t1);
       print_r($p1);

    ?></pre>
</body>
</html>
