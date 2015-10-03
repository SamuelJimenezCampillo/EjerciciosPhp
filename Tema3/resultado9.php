<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        if(($a==0)&&($b==0)&&($c==0)){
            echo "tiene infinitas soluciones";
        }else if(($a==0)&&($b!=0)&&($c!=0)){
            $x1=-$c/$b;
            echo "x vale "+$x1;
        }else if(($a==0)&&($b==0)&&($c!=0)){
            echo "no tiene solucion ";
        }else if(($a!=0)&&($b!=0)&&($c==0)){
        echo "x vale 0 o "+(-$b/$a);    
        }else{
            if((pow($b,2)-4*$a*$b)<0){
                echo "no tiene solucion";
            }else{
                $x1=(-$b + sqrt(pow($b,2)-4*$a*$b))/(2*$a);
                $x2=(-$b - sqrt(pow($b,2)-4*$a*$b))/(2*$a);
                echo "x vale "+$x1+" o "+$x2;
            }
        }
        ?>
    </body>
</html>
