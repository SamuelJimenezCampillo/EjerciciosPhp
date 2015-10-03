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
        // put your code here
          $hora = $_GET['hora'];
          $min = $_GET['min'];

          $segActuales = ($hora * 3600) + ($min * 60);
          $segRestantes = (24 * 3600) - $segActuales;

          echo "Desde las $hora:$min hasta la medianoche faltan ";
          echo "$segRestantes segundos.";
        ?>
    </body>
</html>
