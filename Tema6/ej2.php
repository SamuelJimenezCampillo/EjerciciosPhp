<?php
session_start();
?>
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
            if(!isset($_SESSION['cuentaNumeros'])){
                $_SESSION['sumaIm']=0;
                $_SESSION['cuentaNumerosIm']=0;
                $_SESSION['cuentaNumeros']=0;
                $_SESSION['mayorPar']=0;
                ?>
                  <form action="#" method="post">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
            }else{
                $n = $_POST['n'];

                if ($n >= 0) {
                  $_SESSION['cuentaNumeros']++;
                  if(($n%2)==0){
                      if($n>$_SESSION['mayorPar']){
                          $_SESSION['mayorPar']=$n;
                      }
                  }else{
                      $_SESSION['cuentaNumerosIm']++;
                      $_SESSION['sumaIm']+=$n;
                  }
                  ?>
                  <form action="ej2.php" method="post">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
                }else{
                    ?>

        <p>La media de los impares es :<?php echo $_SESSION['sumaIm']/$_SESSION['cuentaNumerosIm'];?> </p>
        <p>El total de numeros introducidos es: <?php echo $_SESSION['cuentaNumeros'];?></p>
        <p>El mayor numero par es: <?php echo$_SESSION['mayorPar'];?></p>
                    <?php
                session_destroy();            
                }
            }
            ?>
    </body>
</html>
