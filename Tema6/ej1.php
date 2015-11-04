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
            if(!isset($_SESSION['suma'])){
                $_SESSION['suma']=0;
                $_SESSION['cuentaNumeros']=0;
                ?>
                  <form action="#" method="post">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
            }else{
                $n = $_POST['n'];

                if ($n >= 0) {
                  $_SESSION['suma'] += $n;
                  $_SESSION['cuentaNumeros']++;
                  ?>
                  <form action="ej1.php" method="post">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
                }else{
                    ?>

                <p>La media de los numeros introducido es :<?php echo $_SESSION['suma']/$_SESSION['cuentaNumeros'];?> </p>
                    <?php
                session_destroy();            
                }
            }
            ?>
    </body>
</html>
