<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
    <?php
       require_once 'Caneta.php';

       $c1 = new Caneta("BIC", "Azul", 0.5);
       $c2 = new Caneta("LOG", "Preta", 0.7);

       print_r($c1);
       print_r($c2);


    ?>
    </pre>
</body>
</html>