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
        $logeado=false;
         if(!isset($_POST['usuario1'])){
             
                ?>
                  <form action="#" method="post">
                    Usuario <input type="text" name="usuario1" autofocus></br>
                    Contraseña <input type="text" name="contrasena1">
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
         }else{
             
             if(($_POST['usuario1'] == "ejercicio3")&&($_POST['contrasena1'] == "ej3")){
                 $_SESSION['usuario']=$_POST['usuario1'];
                 $_SESSION['contrasena']=$_POST['contrasena1'];
                 $logeado=true;
                 ?>
                <p>Te has logeado exitosamente ya puedes acceder a los ejercicios</p>
                
                 <?php
                
             }
             if(!$logeado){
                ?>
                  Has fallado intentalo de nuevo
                  <form action="#" method="post">
                    Usuario <input type="text" name="usuario1" autofocus></br>
                    Contraseña <input type="text" name="contrasena1">
                    <input type="submit" value="Aceptar">
                  </form>   
                  <?php
                 
             }
         }
         
        ?>
    </body>
</html>
