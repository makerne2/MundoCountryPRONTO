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
        
        $Nproduto = $_POST ["Nomeproduto"];
        $Vproduto = $_POST ["Valorproduto"];
        $Qproduto = $_POST ["Quantidade"]; 
        
        $total = $Qproduto * $Vproduto;
        
        echo " O total de vendas do Produto $Nproduto é $total";
        
        
        ?>
    </body>
</html>
