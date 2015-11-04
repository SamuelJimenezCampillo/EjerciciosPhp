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
        if(($_SESSION['usuario']=="ejercicio3")&&($_SESSION['contrasena']=="ej3")){
            
            if(!isset($_SESSION['cuentaNumeros'])){
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
            $_SESSION['suma']+=$n;
            $_SESSION['cuentaNumeros']++;
            if($_SESSION['suma']<10000 ){
                  ?>
                  <form action="#" method="post">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
            }else{
                    ?>

        <p>La media es :<?php echo $_SESSION['suma']/$_SESSION['cuentaNumeros'];?> </p>
        <p>El total de numeros introducidos es: <?php echo $_SESSION['cuentaNumeros'];?></p>
        <p>La suma total de los numeros introducidos es <?php echo $_SESSION['suma'];?></p>
                    <?php
                session_destroy();            
                }
            }
            
        }else{
            ?>
        <p>No se pude acceder sin haberse logeado</p>
        <?php
        }
            ?>
    </body>
</html>
