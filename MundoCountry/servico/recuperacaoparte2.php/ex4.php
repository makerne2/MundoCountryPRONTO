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
        $a = array();
        $a[0] = 10;
        $a[1] = 8;
        $a [2] = 3;
        for ($i=0; $i<3; $i++)  {
            
        echo "Posição:" . $i." - valor: ".$a[$i]. "<br>";
            
        }
                
        function somar ($num1, $num2) {
            return $num1 + $num2 ;
          
        }
        
        $somar= somar ($a[1], 5);
        echo $somar;
        
              ?>
    </body>
</html>
