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
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
        
          if ($num1 > $num2) {
            $x = $num1;
            $num1 = $num2;
            $num2 = $x;
          }

          if ($num2 > $num3) {
            $x = $num2;
            $num2 = $num3;
            $num3 = $x;
          }

          if ($num1 > $num2) {
            $x = $num1;
            $num1 = $num2;
            $num2 = $x;
          }

          echo "Los números introducidos ordenados de menor a mayor son $num1, $num2 y $num3."; 
        ?>
    </body>
</html>
