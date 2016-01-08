<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'DadoPoker.php';
        $dado1 = new DadoPoker();
        $dado1->tira();
        echo $dado1->getNombreFigura();
        echo "</br>";
        $dado1->tira();
        echo $dado1->getNombreFigura();
        echo "</br>";
        $dado2 = new DadoPoker();
        $dado2->tira();
        echo $dado2->getNombreFigura();
        echo "</br>";
        echo DadoPoker::getTiradasTotales();
        ?>
    </body>
</html>
