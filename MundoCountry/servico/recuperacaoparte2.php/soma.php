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
     
        $numero1 = $_POST ["numero1"];
        $numero2 = $_POST ["numero2"];
        
        
        $soma = $numero1 + $numero2 ;
        echo "$soma"; 
        
        ?>
    </body>
</html>
