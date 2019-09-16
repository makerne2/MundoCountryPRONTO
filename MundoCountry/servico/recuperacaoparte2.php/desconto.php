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
    
        $Precototal= $_POST["Precototal"];
        $desconto= $_POST["desconto"];
        
        
       function parametro ($vcompra , $vdesconto) {
           
           $vdesc= $vcompra*($vdesconto/100);
           $resul= $vcompra - $vdesc;
           return $resul ;
         
           
       }
         $vdesconto = parametro ($Precototal, $desconto); 
         echo $vdesconto   ."<br>";        
      
        
        ?>
    </body>
</html>
